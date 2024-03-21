<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    public function accessoy()
    {
        return $this->belongsTo(Accessory::class, 'id');
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
