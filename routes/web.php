<?php

use App\Http\Controllers\ComicsController;
use Illuminate\Support\Facades\Route;

// ------------


Route::get('/', function(){ return view('index'); })->name('home');
// COMICS
// index
Route::get('/comics', [ComicsController::class, 'index'])->name('comics.index');
// create
Route::get('/comics/create', [ComicsController::class, 'create'])->name('comics.create');
// show
Route::get('/comics/{comic}', [ComicsController::class, 'show'])->name('comics.show');
// store
Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store');
// edit
Route::get('/comics/{comic}/edit', [ComicsController::class, 'edit'])->name('comics.edit');
// update
Route::put('/comics/{comic}', [ComicsController::class, 'update'])->name('comics.update');
// destroy
Route::delete('/comics/{comic}', [ComicsController::class, 'destroy'])->name('comics.destroy');