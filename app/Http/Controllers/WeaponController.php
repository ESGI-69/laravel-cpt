<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use App\Models\Wtype;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
  public function addWeapon() {
    $weapons = Weapon::all();

    $wtypes = Wtype::all();

    return view('add-weapon', compact(['weapons', 'wtypes']));
  }
}
