<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Cambiamos 'UserAccessDashboard' por 'admin'
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resources([
        'posts' => PostController::class,
        'categories' => CategoryController::class,
    ]);
});

Route::get('/contacto', function () {
    return view('welcome');
})->name('contacto');

require __DIR__.'/auth.php';
