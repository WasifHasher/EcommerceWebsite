<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\ProductController;
use app\Models\User;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('homeRoute', [Usercontroller::class, 'showIndexPage']);

Route::post('/LoginRoute',[Usercontroller::class, 'Login']);
Route::get('/product',[ProductController::class, 'index']);