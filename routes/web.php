<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [\App\Http\Controllers\PrimerControlador::class, 'index']);
