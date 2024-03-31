<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroCRUDController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [Controller::class,'home']);

Route::get('/addLibro', [LibroCRUDController::class,'mostrarFormularioAdd']);
Route::post('/addLibroPost', [LibroCRUDController::class,'AddLibro'])->name('AddLibro');
