<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;

Route::get('/', function () {
    $users = User::all();
    return Inertia::render('Welcome', compact('users'));
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
