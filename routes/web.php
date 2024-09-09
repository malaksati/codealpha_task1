<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Models\Cart;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [HomeController::class,'about']);

Route::get('/contact', [MessageController::class,'contact']);
Route::post('/contact/add', [MessageController::class,'contact_add']);

Route::get('/profile/edit/{id}', [UserController::class,'profile_edit']);
Route::put('/profile/update/{id}', [UserController::class,'profile_update']);
Route::get('/profile/{id}', [UserController::class,'profile'])->name('profile');

Route::get('/products', [ItemController::class,'products']);

// AUTH
Route::get('/register', [RegisterController::class, "register"]);
Route::post('/register', [RegisterController::class, "handle_register"]);
Route::get('/login', [LoginController::class, "login"]);
Route::post('/login', [LoginController::class, "handle_login"]);
Route::get('/logout', [LogoutController::class, "logout"]);

// ADMIN
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'admin']);
    Route::get('/user/add',[UserController::class,'create']);
    Route::post('/user/store',[UserController::class,'store']);
    Route::get('/user/edit/{id}',[UserController::class,'edit']);
    Route::put('/user/update/{id}',[UserController::class,'update']);
    Route::get('/user/delete/{id}',[UserController::class,'destroy']);

    Route::get('/item/add',[ItemController::class,'create']);
    Route::post('/item/store',[ItemController::class,'store']);
    Route::get('/item/edit/{id}',[ItemController::class,'edit']);
    Route::put('/item/update/{id}',[ItemController::class,'update']);
    Route::get('/item/delete/{id}',[ItemController::class,'destroy']);

});
Route::prefix('cart')->group(function () {
    Route::get('/add/{id}',[CartController::class,'add']);
    Route::get('/remove/{id}',[CartController::class,'delete']);
    Route::get('/{id}',[CartController::class,'show']);
});