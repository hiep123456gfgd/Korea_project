<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/dat-mk',[CustomerController::class,'datmk']);
Route::post('/login', [CustomerController::class, 'login']);
Route::post('/register', [CustomerController::class, 'register']);

Route::get('/customer/data', [CustomerController::class, 'getData']);
Route::post('/customer/create', [CustomerController::class, 'createData']);
Route::put('/customer/update', [CustomerController::class, 'UpateData']);
Route::delete('/customer/delete/{id}', [CustomerController::class, 'deleteData']);

Route::get('/comments/data', [CommentsController::class, 'getData']);
Route::post('/comments/create', [CommentsController::class, 'createData']);
Route::put('/comments/update', [CommentsController::class, 'UpateData']);
Route::delete('/comments/delete/{id}', [CommentsController::class, 'deleteData']);

Route::get('/posts/data', [PostsController::class, 'getData']);
Route::post('/posts/create', [PostsController::class, 'createData']);
Route::put('/posts/update', [PostsController::class, 'UpateData']);
Route::delete('/posts/delete/{id}', [PostsController::class, 'deleteData']);

Route::get('/pages/data', [PagesController::class, 'getData']);
Route::post('/pages/create', [PagesController::class, 'createData']);
Route::put('/pages/update', [PagesController::class, 'UpateData']);
Route::delete('/pages/delete/{id}', [PagesController::class, 'deleteData']);

Route::post('/likes/create', [LikesController::class, 'createData']);
Route::put('/likes/update', [LikesController::class, 'UpateData']);
Route::get('/likes/posts/data', [LikesController::class, 'getData']);
Route::get('/likes/pages/data', [LikesController::class, 'getData']);

Route::post('/friendships/create', [LikesController::class, 'createData']);


