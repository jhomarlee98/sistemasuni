<?php
namespace App\Repository;

use App\Entities\ModuloCurso;


class ModulosCursosRepository{

	public function listarActivos(){
		return ModuloCurso::all();
	}
}

?>