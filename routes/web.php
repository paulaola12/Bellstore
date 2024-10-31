<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\productController;

// Route::get('/single', function () {
//     return view('project.single-product');
// });

Route::get('/', [productController::class, 'index'])->name('index');

Route::get('/products', [productController::class, 'showproducts'])->name('products');

Route::get('/single-products/{id}', [productController::class, 'show'])->name('single-product');

// Cart 
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// payment controller
Route::get('/checkout', [PaymentController::class, 'index'])->name('checkout');

//Usercontroller
Route::get('/login', [UserController::class, 'index'])->name('login');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/sign-up', [UserController::class, 'store'])->name('sign');