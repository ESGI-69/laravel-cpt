<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crime;
use App\Models\Weapon;
use App\Models\City;


class CrimeController extends Controller
{
    public function displayCrimes(){
        $currentAuthUserId = auth()->user()->id;
        $crimes = Crime::orderBy('created_at', 'desc')->paginate(5); //On montre les 25 permiers crimes
        return view('feed', compact('crimes', 'currentAuthUserId'));
    }

    public function addCrime(){
        $weapons = Weapon::all();
        $cities = City::all();
        return view('add-crime', compact(['cities', 'weapons']));
    }

    public function editCrime(Request $request){
      $crime = Crime::findOrFail($request->id);
      $weapons = Weapon::all();
      $cities = City::all();
      return view('edit-crime', compact(['crime', 'weapons', 'cities']));
    }

    public function create_crime (){

    }
    public function delete_crime(){

    }
}
