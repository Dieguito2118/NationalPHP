<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{   
    //La tabla a conectar a este Modelo
    protected $table="Continents";
    //La clave primaria de esa Tabla
    protected $primaryKey = "contient_id";
    //Omitir campos de Auditoria
    public $timestamps =false;
    
    use HasFactory;
}
