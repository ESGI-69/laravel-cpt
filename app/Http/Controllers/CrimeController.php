<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crime;
use App\Models\Weapon;
use App\Models\City;


class CrimeController extends Controller
{
    public function displayCrimes(){
      $crimes = Crime::paginate(25); //On montre les 25 permiers crimes
      return view('feed', compact('crimes'));
    }
    
    public function addCrime(){
        $weapons = Weapon::all();
        $cities = City::all();
        return view('add-crime', compact(['cities', 'weapons']));
    }

    public function create_crime (){
        
    }
    public function delete_crime(){

    }
}
