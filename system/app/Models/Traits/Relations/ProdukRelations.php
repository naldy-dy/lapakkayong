<?php 

namespace App\Models\Traits\Relations;
use Illuminate\Support\Str;
use App\Models\User;

trait ProdukRelations{


	function getHargaAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

	function getNamaAttribute(){
		return ucwords($this->attributes['nama']);
	}

	function getLokasiAttribute(){
		return ucwords($this->attributes['lokasi']);
	}

	function handleUploadFoto(){
		if(request()->hasFile('foto')){
			$foto = request()->file('foto');
			$destination = "images/produk";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination,  $filename);
			$this->foto = "app/".$url;
			$this->save();
		}
	}


}

?>