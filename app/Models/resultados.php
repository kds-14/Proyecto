<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resultados extends Model
{
    use HasFactory;
    protected $primarykey='Codigo';
    public $timestamps = false; 
    protected $fillable = [
        'Codigo',
        'Nombre_resul'
    ];
}
