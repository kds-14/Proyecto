<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ambientes extends Model
{
    use HasFactory;
    protected $primarykey='Nro_ambi';
    public $timestamps = false; 
    protected $fillable=[
        'Nro_ambi',
        'Elementos_del_Ambiente',
        'Especializacion'
    ];
}
