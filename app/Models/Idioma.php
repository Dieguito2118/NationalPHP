<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    //La tabla a conectar a este Modelo
    protected $table="languages";
    //La clave primaria de esa Tabla
    protected $primaryKey = "language_id";
    //Omitir campos de Auditoria
    public $timestamps =false;
    use HasFactory;

    //Relacion entre Idioma y Paises
    public function paises(){
        return $this->belongsToMany(Country::class,
                                    'country_languages'  ,
                                    'language_id' ,
                                    'country_id');
    }
}
