<?php 
namespace App\Http\Controllers;
use App\Models\kategori;
 


 class KategoriController extends Controller{

 	function index(){
 		$data['list_kategori'] = kategori::all();
 		return view('admin.kategori.index', $data);
 	}
 	function createKategori(){
 		return view('admin.kategori.create-kategori');
 	}


 	function insertKategori(){
 		$kategori = new Kategori;
 		$kategori->nama = request('nama');
 		$kategori->ikon = request('ikon');

 		$kategori->save();
 		return redirect('kategori')->with('success', 'Data Berhasil ditambah');

 	}
 	function showKategori(Kategori $kategori){
 		$data['kategori'] = $kategori;
 	}

 	function editKategori(Kategori $kategori){
 		$data['kategori'] = $kategori;
 		return view('admin.kategori.edit-kategori',$data);
 	}

 	function updateKategori(Kategori $kategori){
 		$kategori->nama = request('nama');
 		$kategori->ikon = request('ikon');

 		$kategori->save();
 		return redirect('kategori')->with('success', 'Data Berhasil ditambah');

 	}

 	function destroyKategori(Kategori $kategori){
 		$kategori->delete();
 		return redirect('kategori');
 	}

 }