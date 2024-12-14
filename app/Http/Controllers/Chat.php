<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chat extends Controller
{
    // This handles the general /chat route
    public function chat()
    {
        return view('livewire.chat.chat');  // Loads the chat view
    }

    // This handles the /chat/{query} route
    public function show($query)
    {
        // Pass query data to the view
        return view('livewire.chat.chat', ['query' => $query]);
    }
}
