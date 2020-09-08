<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table='modulos';
    public function modulocursos(){

    	return $this->hasMany(ModuloCurso::class);
    }
}
