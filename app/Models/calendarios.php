<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calendarios extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
        'Fecha_inicio',
        'Fecha_fin',
        'Hora'
    ];
}
