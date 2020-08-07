<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table='banners';
    protected $fillable=['BanNom','BanUrl','BanTxt','BanRed','BanPos'];
}
