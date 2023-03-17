<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class red_tematica extends Model
{
    use HasFactory;
    protected $primarykey='Codigo_red';
    public $timestamps = false; 
    protected $fillable = [
        'Codigo_red',
        'Nombre_red'
    ];

}
