<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{   
    //La tabla a conectar a este Modelo
    protected $table="continents";
    //La clave primaria de esa Tabla
    protected $primaryKey = "continent_id";
    //Omitir campos de Auditoria
    public $timestamps =false;
    
    use HasFactory;

    //Relacion entre Continente y Region
    public function regiones(){

        //hasMany Parametros:
        //1.El modelo relacional
        //2.La clave FK del model actual en
        /// el modelo a relacionar
        return $this ->hasMany(Region::class ,
                                'continent_id');
    }

    //Relacion entre continente y sus paises
    //Abuelo: Continent
    //Papa: Region
    //Nieto: Country
    public function paises(){
        //hasManyThrough Parametros
        // 1- Modelo Nieto
        // 2- Modelo Papa
        // 3- FK del Abuelo en el Papa
        // 4- FK del Papa en el Nieto
        return $this->hasManyThrough(Country::class,
                                        Region::class,
                                        'continent_id',
                                        'region_id');

    }
}
