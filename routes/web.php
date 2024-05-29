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
Route::get('/comics/{comics}', [ComicsController::class, 'show'])->name('comics.show');
// show
Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store');
