<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('posts', PostController::class);
//Route::resource(name: 'category', controller: CategoryController::class);

Route::middleware([App\Http\Middleware\TestMiddleware::class])->group(function () {
    Route::get('/test/{id?}/{name?}', function ($id = 10, $name = 'Rebeca') {
    echo $id;
    echo $name;
});
});

Route::group(['prefix'=>'dashboard'],function(){
    Route::resource('posts', PostController::class);//->except(['show']);
//    Route::resource(name: 'category', controller: CategoryController::class);

//    Route::resources([
//        'posts'=> PostController::class,
//        'category'=> CategoryController::class
//    ]);
});


Route::get('/contacto', function () {
    return 'Página de contacto';
})->name('contacto');

//Route::get('/test/{id?}/{name}', function ($id = 10, $name = 'Rebeca') {
//    echo $id;
//    echo $name;
//});


//Route::controller(PostController::class)->group(function () {
//    Route::get('post',  'index')->name('post.index');
//    Route::get('post/{post}',  'show')->name('post.show');
//    Route::get('post/create',  'create')->name('post.create');
//    Route::get('post/{post}/edit',  'edit')->name('post.edit');
//
//    Route::post('post',  'store')->name('post.store');
//    Route::put('post/{post}',  'update')->name('post.update');
//    Route::delete('post/{post}',  'delete')->name('post.destroy');
//
//});



//Route::group(['prefix'=>'dashboard'],function(){
//    Route::resource('posts', PostController::class);
//    Route::resource(name: 'category', controller: CategoryController::class);
//    Route::resources([
//        'posts' => PostController::class,
//        'category' => CategoryController::class,
//    ]);
//});
