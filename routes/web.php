<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
});

// About
Route::get('/about', function () {
    return view('about');
});

// More
Route::get('/more', function () {
    return view('more');
});
