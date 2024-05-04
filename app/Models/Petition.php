<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Petition extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function accessory()
    {
        return $this->belongsTo(Accessory::class, 'accesorio_id');
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipo_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'ingBiomedico_id');
    }
}
