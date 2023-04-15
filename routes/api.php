<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/User', [UserController::class, 'getUser']);
Route::post('/User', [UserController::class, 'createUser']);
Route::post('/User/login', [UserController::class, 'login']);

Route::get('/Post', [PostController::class, 'getPost']);
Route::middleware('auth:sanctum')->post('/Post', [PostController::class, 'createPost']);
Route::middleware('auth:sanctum')->post('/Post/{id}', [PostController::class, 'editPost']);
Route::middleware('auth:sanctum')->delete('/Post/{id}', [PostController::class, 'deletePost']);
Route::middleware('auth:sanctum')->get('/Post/user/{id}', [PostController::class, 'postByUser']);