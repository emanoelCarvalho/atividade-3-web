<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author', 'publisher', 'categories'])->get();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::with(['author', 'publisher', 'categories'])->findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function create()
    {
        $authors = Author::all();
        $publishers = Publisher::all();
        $categories = Category::all();
        return view('books.create', compact('authors', 'publishers', 'categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|integer',
            'publisher_id' => 'required|integer',
            'published_year' => 'required|integer',
            'categories' => 'required|array',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        if ($request->hasFile("cover_image")) {
            $imageName = time() . "." . $request->cover_image->extension();
            $request->cover_image->move(public_path("img/books"), $imageName);
            $validatedData["cover_image"] = $imageName;
        }

        $book = Book::create($validatedData);
        $book->categories()->attach($request->categories);

        return redirect()->route('books.index')->with('success', 'Livro criado com sucesso!');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();
        $publishers = Publisher::all();
        $categories = Category::all();
        return view('books.edit', compact('book', 'authors', 'publishers', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|integer',
            'publisher_id' => 'required|integer',
            'published_year' => 'required|integer',
            'categories' => 'required|array',
        ]);

        $book = Book::findOrFail($id);
        $book->update($validatedData);
        $book->categories()->sync($request->categories);

        return redirect()->route('books.index')->with('success', 'Livro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->categories()->detach();
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Livro excluído com sucesso!');
    }
}
