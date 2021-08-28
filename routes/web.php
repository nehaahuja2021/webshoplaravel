<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('master');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect ('login');
});


Route::post('/login', [UserController::class,'login']);

/* for registration */
Route::view('/register','register');
Route::post('/register', [UserController::class,'register']);

Route::get('/product',
    [ProductController::class,'index']);

    Route::get('/search',
    [ProductController::class,'search']);

    Route::post('/addtocart',
    [ProductController::class,'add_to_cart']);

    Route::get('/yourcart',
    [ProductController::class,'cartlist']);
    

/* Home Page */
    Route::get('/vegetables',[ProductController::class,'vegetables']);
    Route::get('/fruits',[ProductController::class,'fruits']);
    
    /* Delete from cart */

    Route::get('/deletefromcart/{id}',
    [ProductController::class,'delete_from_cart']);

    /* order */
    Route::get('/ordernow',
    [ProductController::class,'order_now']);
    Route::post('/orderplace',
    [ProductController::class,'orderPlace']);

    Route::get('/myorders',
    [ProductController::class,'myOrders']);
