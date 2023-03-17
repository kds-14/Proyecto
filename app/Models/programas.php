<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programas extends Model
{
    use HasFactory;
    protected $primarykey='programas_Codigo';
    public $timestamps = false; 
    protected $fillable = [
        'programas_Codigo',
        'Nombre_programa',
        'Version',
        'Nivel_formacion',
        'Estado',
        'Duracion_maxima',
        'Tipo_de_Formacion',
        'Estado'
    ];

}
