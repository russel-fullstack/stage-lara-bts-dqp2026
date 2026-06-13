<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));
Route::get('/dashboard', fn () => view('dashboard'));

Route::prefix('academic')->name('academic.')->group(function () {
    Route::get('academic-years', fn () => view('academic.academic-years.academic-years-index'))->name('academic-years.index');

    Route::get('academic-years/create', fn () => view('academic.academic-years.academic-years-create'))->name('academic-years.create');

    Route::get('academic-years/{id}/edit', fn ($id) => view('academic.academic-years.academic-years-edit', compact('id')))->name('academic-years.edit');

    Route::get('programs', fn () => view('academic.programs.programs-index'))->name('programs.index');

    Route::get('programs/create', fn () => view('academic.programs.programs-create'))->name('programs.create');

    Route::get('programs/{id}/edit', fn ($id) => view('academic.programs.programs-edit', compact('id')))->name('programs.edit');

});
