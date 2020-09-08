<?php
namespace App\Repository;

use App\Entities\Banner;

/**
 * 
 */
class BannersRepository {
	
	public function listBanner(){
		return Banner::where('BanEst',1)->orderBy('BanPos','asc')->get();
	}

	public function bannersActivos(){
		return Banner::count();	
	}
}

 ?>