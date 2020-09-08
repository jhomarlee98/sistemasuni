<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ModuloCurso extends Model
{
    protected $table='modulos_cursos';

    public function cursos(){
    	return $this->belonsToMany(Curso::class);
    }
    public function modulos(){
    	return $this->belonsToMany(Modulo::class);
    }

}
