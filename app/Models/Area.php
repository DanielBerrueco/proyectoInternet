<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'ingBiomedico_id');
    }
    public function user2()
    {
        return $this->belongsTo(User::class, 'jefe_id');
    }
}
