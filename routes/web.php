<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;

Route::view('/', 'home',['nombre' => 'Juan'])->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('portafolio', ProjectController::class)
->parameters(['portafolio' => 'project'])
->names('projects');

Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('messages.store');

Auth::routes(['register' => false]);
