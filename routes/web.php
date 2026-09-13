<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    // Syndicate-specific routes
    Route::view('city', 'city')->name('city');
});

require __DIR__.'/settings.php';
