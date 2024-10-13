<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;

use App\Models\User;
use App\Models\Image;

Route::get('/', [UserController::class, 'index']);
Route::get('/person/{user:username}', [UserController::class, 'person']);

Route::get('/about', function(){
    return view('about', ['title' => 'About']);
});

Route::get('/gallery', function(){
    return view('gallery', [
        'title' => 'Gallery',
        'images' => Image::all()
    ]);
});

Route::get('/search', [SearchController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);