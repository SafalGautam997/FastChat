<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    public function index()
    {
        return view('livewire.chat.index');  // Load the chat index view
    }
}
