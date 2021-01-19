<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ProdukPenjualController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PembelianController;



// Auth
Route::get('login',[AuthController:: class, 'showLogin'])->name('login');
Route::post('login',[AuthController:: class, 'prosesLogin']);
Route::get('logout',[AuthController:: class, 'logout']);
Route::get('daftar',[AuthController:: class, 'Registrasi']);
Route::post('signup',[AuthController:: class, 'prosesRegis']);


Route::middleware('auth')->group(function(){
// User
Route::get('/',[IndexController:: class, 'showIndex']);
Route::get('/index',[IndexController:: class, 'showIndex']);
Route::get('/detail',[IndexController:: class, 'showDetail']);
Route::get('/detail/{detail}',[IndexController:: class, 'showDetail']);
Route::get('/detail-user/{detail}',[IndexController:: class, 'showDetailUser']);

Route::get('cart',[PembelianController:: class, 'cart']);
Route::post('cart',[PembelianController:: class, 'storePembelian']);

// admin
Route::post('index',[IndexController:: class,'filterIndex']);
Route::get('cart', [HomeController:: class,'ajaxs']);
});

// setting kontoler
Route::get('setting-admin', [SettingController:: class,'index']);
Route::post('setting-admin', [SettingController:: class,'store']);

// penjual
Route::prefix('penjual')->middleware('auth')->group(function(){
	Route::get('penjual-dashboard', [PenjualController:: class, 'showBeranda']);
		Route::post('penjual-create', [ProdukPenjualController:: class, 'store']);
		Route::get('penjual-produk', [ProdukPenjualController:: class, 'index']);
		Route::get('penjual-create', [ProdukPenjualController:: class, 'create']);
		Route::get('penjual-show/{produk}', [ProdukPenjualController:: class, 'show']);
		Route::get('penjual-edit/{produk}/edit', [ProdukPenjualController:: class, 'edit']);
		Route::put('penjual-edit/{produk}', [ProdukPenjualController:: class, 'update']);
		Route::post('penjual-produk/filter',[ProdukPenjualController:: class,'filter']);
		Route::delete('penjual-delete/{produk}', [ProdukPenjualController:: class, 'destroy']);

		});
	
// prefix----------------------------------------------
Route::prefix('admin')->middleware('auth')->group(function(){
		Route::get('beranda/{status}', [HomeController:: class, 'showBeranda']);
		Route::get('beranda', [HomeController:: class, 'showBeranda']);

		Route::get('jual-produk', [HomeController:: class, 'showJual']);
		Route::get('kategori', [HomeController:: class, 'showKategori']);
		Route::post('produk/filter',[ProdukController:: class,'filter']);
		// produk
		Route::resource('produk',ProdukController:: class);
		// Kategori
		Route::resource('kategori',KategoriController:: class);
		//user
		Route::resource('user',UserController:: class);

}) ;
// end prefix------------------------------------------