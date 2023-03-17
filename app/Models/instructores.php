<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructores extends Model
{
    use HasFactory;
    protected $primarykey='Nro_Doc'; 
    public $timestamps = false; 
    protected $fillable = [
        'Tipo_Documento',
        'Nro_Doc',
        'Nombres',
        'Apellidos',
        'Correo_Electronico',
        'Estado'
    ];

}
