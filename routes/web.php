<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix'=>'dashboard'],function(){
//    Route::resource('posts', PostController::class);
//    Route::resource(name: 'category', controller: CategoryController::class);
    Route::resources([
        'posts' => PostController::class,
        'category' => CategoryController::class,
    ]);
});
