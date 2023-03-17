<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sedes extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
        'Codigo',
        'Direccion',
        'Nombre_Sede',
        'Telefono'
    ];
}
