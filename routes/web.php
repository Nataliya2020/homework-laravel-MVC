<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todo/create', [TodoController::class, 'create']);
Route::get('/todo/{id}', [TodoController::class, 'show']);
