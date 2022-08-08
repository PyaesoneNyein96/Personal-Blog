<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\BlogApiController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users', [UserApiController::class, 'index']);
Route::post('/users/create', [UserApiController::class, 'store']);

Route::delete("/users/{id}",[
    UserApiController::class,'destroy'
]);

Route::put('users/{id}',[
    UserApiController::class,'update'
]);

Route::patch('/users/{id}',[
    UserApiController::class,'update'
]);

// Route::apiResource
Route::apiResource('/blogs', BlogApiController::class);

