<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

Route::get('/register/index', [RegistrationController::class, 'index']);
Route::post('/register/save', [RegistrationController::class, 'save']);

Route::get('/login/index', [LoginController::class, 'index']);
Route::post('/login/checkErrors', [LoginController::class, 'checkErrors']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post/save', [PostController::class, 'save']);
Route::get('/', [PostController::class, 'index']);
Route::get('/post/index', [PostController::class, 'index']);
Route::get('/post/detail/{id}', [PostController::class, 'detail']);
Route::get('/post/user/{id}', [PostController::class, 'userposts']);

Route::post('/reply/save', [PostController::class, 'replysave']);