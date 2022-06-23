<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Http\Controllers\admin\AdminDashboardController;


// ---- Ui-Route ----

Route::get('/',[
    UiController::class,'index'
]);

Route::get('/main',[
    UiController::class,'index'
]);

//---- Admin-Route -----

Route::group(['middleware'=>['auth','isAdmin']],function(){
    Route::get('/admin',[
        AdminDashboardController::class,'index'
    ]);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

