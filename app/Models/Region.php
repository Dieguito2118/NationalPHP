<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{   
    //La tabla a conectar a este Modelo
    protected $table="regions";
    //La clave primaria de esa Tabla
    protected $primaryKey = "region_id";
    //Omitir campos de Auditoria
    public $timestamps =false;
    use HasFactory;

    //Relación entree regiones y continente
    public function continente(){
        //belongsTo: Parametros
        // 1- el modelo a Relacionar
        // 2- la FK del modelo a relacionar
        //    en el modelo actual
        return $this->belongsTo(Continent::class,
                                'continent_id');
    }

    //Relacion entre region 1 - M paises
    public function paises(){
        return $this->hasMany(Country::class, 
                                'region_id');
    }
}
