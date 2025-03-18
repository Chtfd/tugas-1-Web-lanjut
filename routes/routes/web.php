<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/', function () {
    return view('pages.home');
})->name('home'); // Named route

Route::get('/learn-more', function () {
    return view('pages.learn-more');
})->name('learn.more');