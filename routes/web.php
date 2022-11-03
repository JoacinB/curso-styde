<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return 'Home';
});

Route::get('/usuarios', [UserController::class, 'index']);

Route::get('/usuarios/{id}', [UserController::class, 'show'])
    ->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', [UserController::class, 'create']);

Route::get('/saludo/{name}/{nickname?}', WelcomeUserController::class);