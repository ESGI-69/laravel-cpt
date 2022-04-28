<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crime;
use App\Models\Weapon;
use App\Models\City;

class ApiController extends Controller
{
    public function createCrime (Request $request) {
        $currentAuthUserId = auth()->user()->id;

        $newCrime = new Crime;

        $newCrime->title = $request->title;
        $newCrime->description = $request->description;
        $newCrime->city_id = $request->city_id;
        $newCrime->user_id = $currentAuthUserId;
        $newCrime->weapon_id = $request->weapon_id;
        $newCrime->victim = $request->victim;

        $newCrime->save();

        return redirect()->route('feed', ['postedCrimeId' => $newCrime->id]);
    }
}
