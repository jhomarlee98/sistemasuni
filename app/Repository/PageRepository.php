<?php 
namespace App\Repository;
use App\Entities\{Curso,Modulo,ModuloCurso,Banner,Area};

/**
 * 
 */
class PageRepository 
{
	
	public function listarModulosCursos(){
		return ModuloCurso::orderBy('ModCod','asc')->get();
	}

	public function listarCursos()
	{
		return Curso::all();
	}

	public function listarBanners(){
		return Banner::where('BanEst',1)->orderBy('BanPos','asc')->get();
	}

	public function bannersActivos(){
		return Banner::count();	
	}

	public function listarModulos(){
		return Modulo::all();
	}

	public function ultimoModulo(){
		return Modulo::max('ModCod');
	}

	public function listarAreas(){
		return Area::orderBy('AreCod','asc')->get();
	}

}
?>