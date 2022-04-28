<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrimeController extends Controller
{
    public function displayCrimes(){
      $crimes = Crime::paginate(25); //On montre les 25 permiers crimes
    return view('feed', compact('crimes'));
    }

    public function create_crime (){
        
    }
    public function delete_crime(){

    }
}
