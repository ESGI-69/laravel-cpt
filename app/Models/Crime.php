<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{    
    use HasFactory;

    public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
