<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='cursos';
    public function modulocursos(){
    	return $this->hasMany(ModuloCurso::class);
    }
}
