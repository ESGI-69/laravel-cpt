<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crime;
use App\Models\Weapon;
use App\Models\City;
use App\Models\User;

class StatController extends Controller
{
    public function displayStat (){
       $crimes = Crime::all();
       $totalCrime = Crime::count();
       $weapons = Weapon::all();
       $cities = City::all();
       $weaponid =  Weapon::all()->pluck('id');
       $cityid =  City::all()->pluck('id');
       $killedWeapon = array();
       $killedInCity = array();
       $bestPlayers = User::all();
        
       

       
       // Nombre de crime fait dans une ville 
       foreach($cityid as $city){
           $killedAt = Crime::where([['city_id', $city]])->count();
           array_push($killedInCity, $killedAt);
        }

       // Nombre de crime fait avec une arme
       foreach($weaponid as $weapon){
           $killWithWeapon = Crime::where([['weapon_id', $weapon]])->count();
           array_push($killedWeapon, $killWithWeapon);
        }
        
        // dd($killedInCity);

        return view('stat', compact(['totalCrime', 'killedWeapon', 'killedInCity', 'weapons', 'cities', 'bestPlayers']));
    }    

}
