<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\productController;

// Route::get('/singler', function () {
//     return view('Admins.update');
// });

Route::get('/', [productController::class, 'index'])->name('index');

Route::get('/products', [productController::class, 'showproducts'])->name('products');

Route::get('/single-products/{id}', [productController::class, 'show'])->name('single-product');

// Cart 
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/save/{id}', [CartController::class, 'store']);

// payment controller
Route::get('/checkout', [PaymentController::class, 'index'])->name('checkout');



//Usercontroller
Route::get('/login', [UserController::class, 'index'])->name('login');

Route::post('/logina', [UserController::class, 'logina'])->name('logina');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/sign-up', [UserController::class, 'store'])->name('sign');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

//AdminController
Route::get('/admin/create', [AdminsController::class, 'index'])->name('display');
Route::post('/admin/create/figure', [AdminsController::class, 'create'])->name('create');
Route::get('/admin/update', [AdminsController::class, 'show'])->name('show');
Route::get('/admin/edit/{id}', [AdminsController::class, 'edit'])->name('admin');
Route::put('/admin/update/{id}', [AdminsController::class, 'update'])->name('update');
Route::delete('/admin/delete/{id}', [AdminsController::class, 'destroy'])->name('delete');