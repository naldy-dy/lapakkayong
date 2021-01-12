<?php 

namespace App\Models;

class Kategori extends Model{
	protected $table =  'kategori';

	function handleUploadFoto(){
		if(request()->hasFile('ikon')){
			$foto = request()->file('ikon');
			$destination = "images/kategori";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination,  $filename);
			$this->foto = "app/".$url;
			$this->save();
		}
	}


}

