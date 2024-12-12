<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenerbanganController;

use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\TiketController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/admin/register', [AdminController::class, 'register']);
Route::post('/admin/login', [AdminController::class, 'login']);

Route::middleware('auth:api')->group(function() {
    Route::get('/pembayaran', [PembayaranController::class, 'index']);
    Route::post('/pembayaran', [PembayaranController::class, 'store']);
    Route::put('/pembayaran/update/{id}', [PembayaranController::class, 'update']);
    Route::delete('/pembayaran/delete/{id}', [PembayaranController::class, 'delete']);

    Route::get('/pemesanan', [PemesananController::class, 'index']);
    Route::post('/pemesanan', [PemesananController::class, 'store']);
    Route::put('/pemesanan/update/{id}', [PemesananController::class, 'update']);
    Route::delete('/pemesanan/delete/{id}', [PemesananController::class, 'delete']);

    Route::get('/penerbangan', [PenerbanganController::class, 'index']);
    Route::post('/penerbangan', [PenerbanganController::class, 'store']);
    Route::put('/penerbangan/update/{id}', [PenerbanganController::class, 'update']);
    Route::delete('/penerbangan/delete/{id}', [PenerbanganController::class, 'delete']);

    Route::get('/penumpang', [PenumpangController::class, 'index']);
    Route::post('/penumpang', [PenumpangController::class, 'store']);
    Route::put('/penumpang/update/{id}', [PenumpangController::class, 'update']);
    Route::delete('/penumpang/delete/{id}', [PenumpangController::class, 'delete']);

    Route::get('/refund', [RefundController::class, 'index']);
    Route::post('/refund', [RefundController::class, 'store']);
    Route::put('/refund/update/{id}', [RefundController::class, 'update']);
    Route::delete('/refund/delete/{id}', [RefundController::class, 'delete']);

    Route::get('/tiket', [TiketController::class, 'index']);
    Route::post('/tiket', [TiketController::class, 'store']);
    Route::put('/tiket/update/{id}', [TiketController::class, 'update']);
    Route::delete('/tiket/delete/{id}', [TiketController::class, 'delete']);

    Route::post('/logout', [UserController::class, 'logout']);
    Route::post('/admin/logout', [AdminController::class, 'logout']);
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
