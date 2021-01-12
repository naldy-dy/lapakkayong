<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showBeranda(){
		return view('admin.beranda');
	}

	function showProduk(){
		return view('admin.produk');
	}

	function showJual(){
		return view('admin.jual-produk');
	}

	function showKategori(){
		return view('admin.kategori');
	}
	


}