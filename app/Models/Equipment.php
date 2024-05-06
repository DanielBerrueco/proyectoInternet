<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
       'marca',
        'modelo',
        'n_serie',
        'status_eq_med',
        'area_id',
        //protected $guarded = ['id, created_at, 'updated_at'];
    ];
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    public function accessory()
    {
        return $this->belongsToMany(Accessory::class);
    }
}
