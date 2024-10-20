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

Route::get('/tiketView', function () {
    return view('tiketView', [
        'tiketList' => [
            [
            'maskapai' => "TransNusa",
            'jamBerangkat' => "07:00",
            'berangkat' => "CGK",
            'durasi' => "1j 40m",
            'tipe' => "langsung",
            'jamTiba' => "08:40",
            'tujuan' => "DPS",
            'harga' => "890.000",
            ],
            [
            'maskapai' => "Lion Air",
            'jamBerangkat' => "08:00",
            'berangkat' => "CGK",
            'durasi' => "1j 45m",
            'tipe' => "langsung",
            'jamTiba' => "09:45",
            'tujuan' => "DPS",
            'harga' => "950.000",
            ],
            [
            'maskapai' => "Citilink",
            'jamBerangkat' => "06:00",
            'berangkat' => "CGK",
            'durasi' => "1j 50m",
            'tipe' => "langsung",
            'jamTiba' => "07:50",
            'tujuan' => "DPS",
            'harga' => "900.000",
            ],
        ]
    ]);
});

Route::get('/tiketDetail', function(){
    return view('tiketDetail');
});

Route::get('/formPemesanan', function(){
    return view('formPemesanan');
});

Route::get('/pembayaran', function(){
    return view('pembayaran');
});
