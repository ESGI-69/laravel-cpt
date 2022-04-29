<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
  public function addWeapon() {
    //get all weapons from db
    $weapons = Weapon::all();

    return view('add-weapon', compact(['weapons']));
  }
//   public function addCrime(){
//     $weapons = Weapon::all();
//     $cities = City::all();
//     return view('add-crime', compact(['cities', 'weapons']));
// }
}
