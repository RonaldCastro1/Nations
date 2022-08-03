<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "countries";
    //La clave primaria de la tabla
    protected $primaryKey = "country_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
    //Relacion con region
    public function region(){
        return $this->belongsTo(Region::class,'region_id');
    }
    //relacion con lenguage
    public function idiomas(){
        return $this->belongsToMany(Language::class,'country_languages','country_id','language_id');
    }
}
