<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\SkillController;


// ---- Ui-Route ----

Route::get('/',[
    UiController::class,'index'
]);

Route::get('/main',[
    UiController::class,'index'
]);

//---- Admin-Route -----

// Route::group(['middleware'=>['auth','isAdmin']],function(){
//     Route::get('/admin',[
//         AdminDashboardController::class,'index'
//     ]);
// });
//  not included (prefix)


Route::group(['prefix'=>'admin','middleware'=>['auth','isAdmin']],function(){
    Route::get('/dashboard',[
        AdminDashboardController::class,'index'
    ]);
    Route::get('/users', [
        UserController::class,'index'
    ]);

    Route::get('/users/edit/{id}', [
        UserController::class,'edit'
    ]);

    Route::post('/users/update/{id}', [
        UserController::class,'update'
    ]);

    Route::post('/users/delete/{id}', [
        UserController::class,'delete'
    ]);


    Route::resource('skills', SkillController::class);

});
// diff syntex but not look like default embed Route::group->prefix



// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard',[
//         AdminDashboardController::class,'index'
//     ])->middleware('auth','isAdmin');
// });
//  included prefix and middleware but do not obey DRY principle --





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

