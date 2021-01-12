<?php 

namespace App\Http\Controllers;
use App\Models\kategori;
use App\Models\Produk;
use App\Models\User;
 


 class IndexController extends Controller{

 	function showIndex(){
 		$data['list_produk'] = produk::all();
 		$data['list_kategori'] = kategori::all();
 		return view('index', $data);
 	}
 	function showDetail(Produk $detail){
 		$data['detail'] = $detail;
 		return view('detail', $data);
 	}
 	function showDetailUser(User $user){
 		$data['user'] = $user;
  		return view('detail-user',$data);
 	}
 	function filterIndex(){
 		// where
 		$nama = request('nama');
 		$data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
 		$data['nama'] = $nama;

 		// whereIn
 		$stok = explode(" ",request('stok'));
 		$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
 		$data['stok'] = request('stok');

 		// whereBetween
 		$harga_min = request('harga_min');
 		$harga_max = request('harga_max');
 		$lokasi = request('lokasi');
 		$data['list_produk'] = Produk::where('lokasi','like', "%$lokasi%")->get();
 		$data['list_produk'] = Produk::whereBetween('harga',[$harga_min, $harga_max])->get();
 		$data['list_kategori'] = kategori::all();


 		return view('index', $data);
 	}


}