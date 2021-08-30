<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\InvestasiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('permohonan', [PermohonanController::class, 'index']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::resource('permohonan', PermohonanController::class);
    Route::get('permohonan/search/{nama_pemohon}', [PermohonanController::class, 'search']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('nasabah', NasabahController::class);
    Route::get('nasabah/search/{nama_depan}', [NasabahController::class, 'search']);
    Route::resource('item', ItemController::class);
    Route::get('item/search/{item}', [ItemController::class, 'search']);
    Route::resource('transaksi', TransaksiController::class);
    Route::get('transaksi/search/{pembayaran_metode}', [TransaksiController::class, 'search']);
    Route::get('investasi/list', [InvestasiController::class, 'list']);
    Route::resource('investasi', InvestasiController::class);
    Route::get('investasi/search/{jenis}', [InvestasiController::class, 'search']);
});
