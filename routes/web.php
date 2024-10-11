<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function(){
    return view('about', ['title' => 'About']);
});

Route::get('/gallery', function(){
    return view('gallery', ['title' => 'Gallery']);
});

Route::get('/search', [SearchController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);