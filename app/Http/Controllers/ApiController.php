<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crime;
use App\Models\Weapon;
use App\Models\City;

class ApiController extends Controller
{
    public function createCrime (Request $request) {
        $newCrime = new Crime;

        $newCrime->title = $request->title;
        $newCrime->description = $request->description;
        $newCrime->city = City::findOrFail($request->cityId);

        $newCrime->save();

        $postedCrimeId = 5;
        return redirect()->route('feed', [$postedCrimeId]);
    }
}
