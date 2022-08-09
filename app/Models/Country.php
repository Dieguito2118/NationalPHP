<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{   
    //La tabla a conectar a este Modelo
    protected $table="Countries";
    //La clave primaria de esa Tabla
    protected $primaryKey = "country_id";
    //Omitir campos de Auditoria
    public $timestamps =false;
    
    use HasFactory;

    //Muchos a muchos entre Paises e Idiomas
    public function idiomas(){
        //belongsToMany para relaciones de muchos a muchos
        // 1- Modelo a relacionar
        // 2- La tabla pivote
        // 3- FK del Modelo actual en el pivote
        // 4- FK del Modelo a relacionar en el pivote
        return $this->belongsToMany(idioma::class,
                                    'country_languages',
                                    'country_id',
                                    'language_id'
                                )->withPivot('official');

    }
}
