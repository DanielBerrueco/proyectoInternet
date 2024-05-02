<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'stats',
        'jefa_id',
        'equipo_id',
        'ingBiomedico_id',
        'area_id',
        'ubicacion',
        'falla',
        'fecha_ejecucion',
        
    ];
}
