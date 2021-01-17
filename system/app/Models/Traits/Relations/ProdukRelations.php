<?php 
namespace App\Models\Traits\Relations;
use App\Models\User;
use App\Models\UserDetail;

trait ProdukRelations{

	function seller(){
		return $this->belongsTo(User:: class, 'id_user');
	}


}

?>