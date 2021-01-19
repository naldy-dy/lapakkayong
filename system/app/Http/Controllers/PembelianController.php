<?php 

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Produk;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Provinsi;
class PembelianController extends Controller{

	function storePembelian(){
		
		$pembelian = new Pembelian;
		$pembelian->jumlah = request('jumlah');
		$pembelian->id_penjual =request()->user()->id;
		$pembelian->pembayaran = request('harga');
		$pembelian->nama_produk = request('nama_produk');
		$pembelian->save();

		return redirect('cart');
	}
	
	function dataPembeli(){
		$data ['list_provinsi'] = Provinsi::all();
 		return view('cart',$data);
	}



}