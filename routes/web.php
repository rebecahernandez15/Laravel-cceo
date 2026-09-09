<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [\App\Http\Controllers\PrimerControlador::class, 'index']);
Route::get('otro/{post}/{otro?}', [\App\Http\Controllers\PrimerControlador::class, 'otro']);
//http://testlara.test/otro/5

//Route::resource('post',\App\Http\Controllers\PrimerControlador::class);
//Route::resource('category',\App\Http\Controllers\PrimerControlador::class);
