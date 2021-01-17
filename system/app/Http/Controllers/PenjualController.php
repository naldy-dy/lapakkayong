<?php 

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Models\Produk;

class PenjualController extends Controller{
	function showBeranda(){
		return view('dashboard.penjual.beranda');
	}

	function showProduk(){
		return view('dashboard.penjual.produk.index');
	}

	function showJual(){
		return view('dashboard.penjual.jual-produk');
	}

	function showKategori(){
		return view('dashboard.penjual.kategori');
	}
	function ajaxs(){
		$data ['list_provinsi'] = Provinsi::all();
		return view('dashboard.penjual.ajaxs', $data);
	}
	


}