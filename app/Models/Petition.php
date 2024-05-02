<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

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
