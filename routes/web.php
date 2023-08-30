<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\TambahPesanController;

Route::get('/', function () {
    return view('welcome');
});

//Auth
Route::get('signup',[UserController::class,'signup'])->name('signup');
Route::post('signup',[UserController::class,'doSignup'])->name('signup.post');
Route::get('signin',[UserController::class,'signin'])->name('signin');
Route::post('signin',[UserController::class,'doSignin'])->name('signin.post');
Route::get('signout',[UserController::class,'signout'])->name('signout');
Route::get('dashcustomer',[UserController::class,'dashCustomer'])->name('dashcustomer');
Route::get('dashadmin',[UserController::class,'dashadmin'])->name('dashadmin');


//Admin
Route::get('pesanan',[PesananController::class,'index'])->name('pesanan');

//Customer
Route::get('pesanan-customer',[PesananController::class,'index'])->name('pesanan-customer');
Route::get('pesanan-customer-create',[PesananController::class,'create'])->name('pesanan.create');
Route::post('pesanan-customer-store',[PesananController::class,'store'])->name('pesanan.store');
Route::get('pesanan-preview/{pesanan}',[PesananController::class,'preview'])->name('pesanan.preview');
Route::delete('pesanan/{pesanan}',[PesananController::class,'destroy'])->name('pesanan.delete');
Route::get('dashcustomer/{pesanan}/edit',[PesananController::class,'edit'])->name('pesanan.edit');
Route::put('bukti-pembayaran/{id}',[PesananController::class,'bukti_pembayaran'])->name('bukti_pembayaran');
Route::put('pesanan/{pesanan}',[PesananController::class,'update'])->name('pesanan.update');
Route::get('ubah_status/{pesanan}',[PesananController::class,'ubah_status'])->name('pesanan.ubah_status');
Route::put('ubahStatus/{pesanan}',[PesananController::class,'ubahStatus'])->name('pesanan.ubahStatus');