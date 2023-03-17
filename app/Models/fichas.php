<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fichas extends Model
{
    use HasFactory;
    protected $primarykey='Nº_ficha';
    public $timestamps = false; 
    protected $fillable = [
        'Nro_ficha',
        'Jornada',
        'Nro_aprendices'
    ];
}
