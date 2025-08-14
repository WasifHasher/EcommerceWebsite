<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\ProductController;
use app\Models\User;
use App\Models\cart;
use App\Models\order;
use Illuminate\Support\Facades\Session;


Route::get('/Logout', function () {
    Session::forget('user');
    return redirect('/homeRoute');
});

Route::get('/',[ProductController::class, 'index']);

Route::get('homeRoute', [Usercontroller::class, 'showIndexPage']);
Route::post('LoginRoute',[Usercontroller::class, 'Login']);

Route::get('detail/{id}',[ProductController::class, 'detail']);
Route::get('search',[ProductController::class, 'search']);
Route::post('/addtoCart',[ProductController::class, 'addtoCart']);


Route::get('/cartlist',[ProductController::class, 'cartlist']);

Route::get('/delete/{id}', [ProductController::class, 'deleteId']);

Route::get('/ordernow',[ProductController::class,'ordernow']);
Route::post('orderplace',[ProductController::class,'orderplace']);
Route::get('/showallorder',[ProductController::class,'showallorder']);






