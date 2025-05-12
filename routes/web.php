<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    // Dati dinamici
    $titolo = "Hello World!";
    return view('home', [
        'titolo' => $titolo
    ]);
});

// About
Route::get('/about', function () {
    // Dati dinamici
    $titolo = "About";
    return view('about', [
        'titolo' => $titolo
    ]);
});

// More
Route::get('/more', function () {
    // Dati dinamici
    $titolo = "More";
    return view('more', [
        'titolo' => $titolo
    ]);
});
