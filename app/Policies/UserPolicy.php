<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function admin(User $user)
    {
        return $user->role === 'admin';
    }

    public function librarian(User $user)
    {
        return $user->role === 'librarian' || $user->role === 'admin';
    }

    public function client(User $user)
    {
        return $user->role === 'cliente' || $user->role === 'librarian' || $user->role === 'admin';
    }
}
