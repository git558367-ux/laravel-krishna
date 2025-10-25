<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


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

Route::get('/create/post',[PostController::class,'createPost']);

Route::get('/blogs',[PostController::class,'blogs'])->name('blogs');

Route::get('/delete/post/{id}',[PostController::class,'deletePost'])->name('delete.post');

Route::get('/post/edit/{id}', [PostController::class, 'editPost'])->name('edit.post');

Route::post('/post/update/{id}', [PostController::class, 'updatePost'])->name('update.post');


#admin
Route::get('/admin',[PostController::class,'admin']);

Route::get('/admin/profile',[PostController::class,'profile']);

Route::middleware('auth','role.admin')->prefix('admin')->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('/dashboard','dashboard')->name('admin.dashboard');
        Route::get('/logout','destroy')->name('admin.logout');
    });
});

