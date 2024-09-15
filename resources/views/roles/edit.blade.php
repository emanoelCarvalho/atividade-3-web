@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Regra</h1>
        <form action="{{ route('roles.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>

                <select class="form-select" name="role" id="role">
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="client" {{ $user->role == 'client' ? 'selected' : '' }}>User</option>
                    <option value="librarian" {{ $user->role == 'librarian' ? 'selected' : '' }}>Bibliotecário</option>
                    
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
