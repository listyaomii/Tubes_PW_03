<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/tiket', function () {
    return view('tiket');
});

Route::get('/profile', function () {
    return view('profile');
});