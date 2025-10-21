<?php

use Illuminate\Support\Facades\Route;

USe App\Http\Controllers\PerguntaController;

Route::get('/', [PerguntaController::class, 'inicio'])
    ->name('inicio');
