<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Users extends Controller
{
    public function users()
    {
        // Fetch users where the name is not null
        $users = User::whereNotNull('name')->get();

        // Return the users to the livewire view
        return view('livewire.users', ['users' => $users]);
    }
}
