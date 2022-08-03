<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "regions";
    //La clave primaria de la tabla
    protected $primaryKey = "region_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
    //Relacion entre region y pais
    Public function paises(){
        return $this->hasMany(Country::class,'region_id');
    }

    //relacion entre region y continente
    public function contiente(){
        return $this->belongsTo(Continent::class, 'continent_id');
    }
}
