<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Http\Controllers\CartController;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::get('hi', function () {
    return ('Hwllo');
});

Route::get('/user/{id}', function ($id) {
    return 'user' . $id;
});

Route::get('/about', [PostController::class, 'about']);

Route::get('/show/{id}', [PostController::class, 'show']);

Route::get('/user', [PostController::class, 'details']);


Route::get('/', [PostController::class, 'about']);

Route::get('/contact', [PostController::class, 'contact']);

Route::post('/post', [PostController::class, 'create']);

Route::get('/signin', [PostController::class, 'sign']);

Route::get('/create/post', [PostController::class, 'createPost']);

Route::get('/blogs', [PostController::class, 'blogs'])->name('blogs');

Route::get('/delete/post/{id}', [PostController::class, 'deletePost'])->name('delete.post');

Route::get('/post/edit/{id}', [PostController::class, 'editPost'])->name('edit.post');

Route::post('/post/update/{id}', [PostController::class, 'updatePost'])->name('update.post');


#admin
Route::get('/admin', [PostController::class, 'admin']);


Route::middleware('auth', 'role:admin')->prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('/logout', 'destroy')->name('admin.logout');
        Route::get('/profile', 'profile')->name('admin.profile');
        Route::get('/profile/edit',  'edit')->name('admin.profile.edit');
        Route::put('/profile/update', 'update')->name('admin.profile.update');
    });
    Route::controller(productcontroller::class)->group(function () {


        Route::get('/products', 'index')->name('products.index');
        Route::get('/products/create', 'create')->name('products.create');
        Route::post('/products/store', 'store')->name('products.store');

        Route::get('/products/edit/{id}', 'edit')->name('products.edit');
        Route::put('/products/update/{id}', 'update')->name('products.update');

        Route::get('/products/delete/{id}', 'delete')->name('products.delete');
    });
});

Route::get('/all/products', [productcontroller::class, 'allproducts'])->name('all.products');
Route::get('/products/detail/{id}', [productcontroller::class, 'detail'])->name('detail.product');


Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::middleware(['auth'])->group(function () {

    Route::get('/user/profile', [UserProfileController::class, 'show'])
        ->name('user.profile');

    Route::get('/user/profile/edit', [UserProfileController::class, 'edit'])
        ->name('user.profile.edit');

    Route::put('/user/profile/update', [UserProfileController::class, 'update'])
        ->name('user.profile.update');

});