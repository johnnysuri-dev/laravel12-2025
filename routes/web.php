<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\AutoreController;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('chats', ChatController::class);
Route::resource('mensajes', MensajeController::class);
Route::resource('autores', AutoreController::class);
