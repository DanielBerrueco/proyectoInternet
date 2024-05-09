<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipment_id');
    }
}
