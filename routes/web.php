<?php

use App\Http\Controllers\Chat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

// Correct route definition
Route::get('/chat/{query}', [Chat::class, 'chat'])->name('chat');
Route::get('/chat', [Index::class, 'index'])->name('chat.index');


