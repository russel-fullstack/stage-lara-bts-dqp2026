<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));
Route::get('/dashboard', fn () => view('dashboard'));

Route::prefix('academic')->name('academic.')->group(function () {
    
});
