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
}
