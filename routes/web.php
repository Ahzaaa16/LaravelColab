<?php

use App\Http\Controllers\HitungController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/hitung', [HitungController::class, 'hitung']);
Route::get('/daftar' , [TestController::class, 'daftar']);
Route::post('/kirim' , [TestController::class, 'kirim']);

Route::get('/', function() {
    return view ('welcome');
})-> name('home');

Route::get('/pendataan', function() {
    return view ('pendataan');
})-> name('pendataan');

Route::get('/daftar', function() {
    return view ('daftar');
})-> name('daftar');

Route::get('/homepage', function() {
    return view ('homepage');
})-> name('homepage');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('kategori', KategoriController::class);

Route::resource('barang', BarangController::class);


Route::get('/pelanggan', [PelangganController::class,'index']);
Route::get('/tambahpelanggan', [PelangganController::class,'tambahpelanggan']);
Route::delete('/pelanggan/{pelanggan_id}',[PelangganController::class,'destroy']); 
Route::post('/pelanggan', [PelangganController::class,'pelanggan']);
Route::get('/pelanggan/{pelanggan_id}', [PelangganController::class,'show']);
Route::get('/pelanggan/{pelanggan_id}/edit', [PelangganController::class,'edit']);
Route::put('/pelanggan/{pelanggan_id}', [PelangganController::class,'update']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
