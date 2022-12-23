<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
Route::post('/clients', [ClientController::class, 'store'])->name('client.store');
Route::get('/clients/create', [ClientController::class, 'create'])->name('client.create');
Route::get('/clients', [ClientController::class, 'index'])->name('client.index');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('client.show');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/', function () {
    return view('welcome');
});
