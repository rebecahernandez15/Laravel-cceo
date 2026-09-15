<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('post/all', [PostController::class, 'all']);
Route::get('post/slug/{post}', [PostController::class, 'slug']);
Route::get('category/all', [CategoryController::class, 'all']);
Route::get('category/{category}/posts', [CategoryController::class, 'posts']);

Route::resource('category', CategoryController::class)->except(["create", "edit"]);
Route::resource('post', PostController::class)->except(["create", "edit"]);
