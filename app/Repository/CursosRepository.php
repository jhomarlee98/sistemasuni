<?php 
namespace App\Repository;

use App\Entities\Curso;

/**
 * 
 */
class CursosRepository 
{
	
	public function listCursos()
	{
		return Curso::all();
	}
}

 ?>
