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

    public function user()
    {
        return $this->belongsTo(User::class, 'ingBiomedico_id');
    }
    public function user2()
    {
        return $this->belongsTo(User::class, 'jefa_id');
    }
    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipo_id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
    
}
