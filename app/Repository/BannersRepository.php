<?php
namespace App\Repository;

use App\Entities\Banner;

/**
 * 
 */
class BannersRepository {
	
	 public function listBanner(){
		return Banner::all();
	}
}

 ?>