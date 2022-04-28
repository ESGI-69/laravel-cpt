<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrimeController extends Controller
{
    public function display_crimes(){
        $crimes = Crimes::paginate(25);
    }

    public function create_crime (){
        
    }
    public function delete_crime(){

    }
}
