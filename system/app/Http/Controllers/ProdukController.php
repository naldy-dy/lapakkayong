<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use Faker;
 


 class ProdukController extends Controller{

 	function index(){
 		$user = request()->user();
 		$data['list_produk'] = $user->produk;
 		return view('admin.produk.index', $data);
 	}
 	function create(){
 		$data['list_kategori'] = Kategori::all();
 		return view('admin.produk.create',$data);
 	}
 	function store(){
 		$produk = new Produk;
 		$produk->id_user =request()->user()->id;
 		$produk->nama = request('nama');
 		$produk->harga = request('harga');
 		$produk->stok = request('stok');
 		$produk->berat = request('berat');
 		$produk->kategori = request('kategori');
 		$produk->diskripsi = request('diskripsi');
 		$produk->lokasi = request('lokasi');
 		$produk->save();
 		$produk->handleUploadFoto();

 		
 		return redirect('admin/produk')->with('success', 'Data Berhasil ditambah');
 	}

 	function show(Produk $produk){
 		$data['produk'] = $produk;
 		return view('admin.produk.show', $data);
 	}
 	function edit(Produk $produk){
 		$data['produk'] = $produk;
 		return view('admin.produk.edit', $data);

 	}
 	function update(Produk $produk){
 		$produk->nama = request('nama');
 		$produk->harga = request('harga');
 		$produk->stok = request('stok');
 		$produk->berat = request('berat');
 		$produk->diskripsi = request('diskripsi');
 		$produk->lokasi = request('lokasi');
 		$produk->save();
 		$produk->handleUploadFoto();

 		return redirect('admin/produk')->with('success', 'Data Berhasil diedit');
 	}
 	function destroy(Produk $produk){
 		$produk->handleDelete();
 		$produk->delete();
 		return redirect('admin/produk')->with('danger', 'Data Berhasil dihapus');
 	}


// -------Tombol Pencarian-----------------------
 	function filter(){
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
 		$data['list_produk'] = Produk::whereBetween('harga',[$harga_min, $harga_max])->get();  


 		return view('admin.produk.index', $data);
 	}
 	




 }