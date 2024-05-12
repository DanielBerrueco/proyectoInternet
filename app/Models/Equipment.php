<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nombre',
       'marca',
        'modelo',
        'n_serie',
        'status_eq_med',
        'area_id',
        'ruta_manual',
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

    public function archivo()
    {
        return $this->hasOne(Archivo::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($equipment) {
            $equipment->accessory()->detach();
        });
    }
}
