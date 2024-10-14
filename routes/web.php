<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ImageController;

Route::get('/', [UserController::class, 'index']);
Route::get('/person/{user:username}', [UserController::class, 'person']);

Route::get('/about', function(){
    return view('about', ['title' => 'About']);
});

Route::get('/gallery', [ImageController::class, 'index']);

Route::get('/search', [SearchController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

// TES
Route::get('/tes/1', function (){
    return view('tes');
});