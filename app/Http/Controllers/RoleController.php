<?php 

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Support\Facades\Gate;


class RoleController extends Controller 
{
    public function index() 
    {
        Gate::authorize('admin', User::class);

        $users = User::paginate();

        return view('roles.index', compact('users'));
    }

    public function edit(User $user) 
    {
        Gate::authorize('admin', User::class);

        return view('roles.edit', compact('user'));
    } 
}