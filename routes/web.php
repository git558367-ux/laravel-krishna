<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hi', function () {
    return ('Hwllo');
});

Route::get('/user/{id}', function ($id) {
    return 'user' . $id;
});

Route::get('/about', [PostController::class, 'about']);

Route::get('/show/{id}', [PostController::class, 'show']);

Route::get('/user', [PostController::class, 'details']);


Route::get('/',[PostController::class, 'about']);

Route::get('/contact',[PostController::class,'contact']);

Route::post('/post',[PostController::class,'create']);

Route::get('/signin',[PostController::class,'sign']);
