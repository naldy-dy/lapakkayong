<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Pembelian extends Model{
	protected $table =  'pembelian';

	function detailPembelian(){
    	return $this->hasOne(Produk:: class, 'uuid');
    }

}