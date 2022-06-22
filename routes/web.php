<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Http\Controllers\admin\AdminDashboardController;

// use app\Http\Controllers\admin\AdminDashboardController;


Route::get('/',[
    UiController::class,'index'
]);

Route::get('/main',[
    UiController::class,'index'
]);

// Route::get('/admin',[
//     AdminDashboardController::class, 'index'
// ]);

Route::get('/manage',[
    AdminDashboardController::class, 'index'
]);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
