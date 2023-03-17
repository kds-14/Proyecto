<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area_tematica extends Model
{
    use HasFactory;
    protected $primarykey='Codigo_area';
    public $timestamps = false; 
    protected $fillable = [
        'Codigo_area',
        'Nombre_area'
    ];

}
