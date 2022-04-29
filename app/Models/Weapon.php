<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
  use HasFactory;

  public function city()
  {
    return $this->belongsTo(Wtype::class);
  }

  protected $fillable = [
    'name',
    'type',
  ];
}
