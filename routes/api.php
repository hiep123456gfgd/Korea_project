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

Route::get('/admin/customer/data', [CustomerController::class, 'getData']);
Route::post('/admin/customer/create', [CustomerController::class, 'createData']);
Route::put('/admin/customer/update', [CustomerController::class, 'UpateData']);
Route::delete('/admin/customer/delete/{id}', [CustomerController::class, 'deleteData']);

Route::get('/admin/comments/data', [CommentsController::class, 'getData']);
Route::post('/admin/comments/create', [CommentsController::class, 'createData']);
Route::put('/admin/comments/update', [CommentsController::class, 'UpateData']);
Route::delete('/admin/comments/delete/{id}', [CommentsController::class, 'deleteData']);

Route::get('/admin/posts/data', [PostsController::class, 'getData']);
Route::post('/admin/posts/create', [PostsController::class, 'createData']);
Route::put('/admin/posts/update', [PostsController::class, 'UpateData']);
Route::delete('/admin/posts/delete/{id}', [PostsController::class, 'deleteData']);

Route::get('/admin/pages/data', [PagesController::class, 'getData']);
Route::post('/admin/pages/create', [PagesController::class, 'createData']);
Route::put('/admin/pages/update', [PagesController::class, 'UpateData']);
Route::delete('/admin/pages/delete/{id}', [PagesController::class, 'deleteData']);

Route::post('/admin/likes/create', [LikesController::class, 'createData']);
Route::put('/admin/likes/update', [LikesController::class, 'UpateData']);
Route::get('/admin/likes/posts/data', [LikesController::class, 'getData']);
Route::get('/admin/likes/pages/data', [LikesController::class, 'getData']);

Route::post('/admin/friendships/create', [LikesController::class, 'createData']);


