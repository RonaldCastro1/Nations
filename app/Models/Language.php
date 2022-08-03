<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "languages";
    //La clave primaria de la tabla
    protected $primaryKey = "language_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
    //Relacion m*m con paises
    public function paises(){
        return $this->belongsToMany(Country::class,'country_languages','language_id','country_id');
    }
}
