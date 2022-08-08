<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\BlogsController;
use App\Http\Controllers\ReactController;
use App\Http\Controllers\CommentController;


// ---- Ui-Route ----

Route::get('/',[
    UiController::class,'index'
]);

Route::get('/', [
    UiController::class,'index'
]);

// Blogs ----
Route::get('/blogs',[
    UiController::class,'indexBlogs'
]);

Route::get("/blogs/detail/{id}",[
    UiController::class,'Blogdetail'
]);
Route::get("/blogs/search",[
    UiController::class,'Search'
]);
Route::get("/blogs/searchByCategory/{id}",[
    UiController::class,'searchByCategory'
]);

// Reaction ----
Route::post("/blogs/like/{blog_id}",[
    ReactController::class, 'like'
]);

// Route::post("/blogs/like/{blog_id}",[
//     ReactController::class, 'like'
// ]);

// Comments ----
// Route::post("/blogs/comment/{blog_id}",[
//     CommentController::class, 'comment'
// ]);

// Route::post("/blogs/comment",[
//     CommentController::class, 'createComment'
// ]);

// Route::get("/blogs/commentDelete/{id}",[
//     CommentController::class, 'deleteComment'
// ]);

// Route::get("/blogs/status/{id}",[
//     CommentController::class, 'commentHide'
// ]);


Route::group(['prefix' => 'blogs', 'middleware'=>'auth','isAdmin'], function(){
    Route::post("/comment",[
        CommentController::class, 'createComment'
    ]);

    Route::get("/commentDelete/{id}",[
        CommentController::class, 'deleteComment'
    ]);

    Route::Post("/status/{id}",[
        CommentController::class, 'commentHide'
    ]);
});

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
    // users ---
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


    // Admin Dashboard--------

    Route::get("/dashboard/edit/{id}",[
        AdminDashboardController::class,'AdminEdit'
    ]);
    Route::post("/dashboard/update/{id}", [
        AdminDashboardController::class,'updateAdmin'
    ]);
    Route::post("/dashboard/delete/{id}", [
        AdminDashboardController::class,'deleteAdmin'
    ]);
    Route::get("dashboard/blogs/{id}", [
        AdminDashboardController::class,'adminBlogs'
    ]);



    // Skills ---
    Route::resource('skills', SkillController::class);

    // Project ---
    Route::resource('projects', ProjectController::class);

    // Categories ---
    Route::resource('Categories', CategoryController::class);

    // Blogs ---
    Route::resource('blogs', BlogsController::class);

});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

