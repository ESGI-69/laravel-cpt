<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crime;

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

    public function editCrime (Request $request) {
        $currentAuthUserId = auth()->user()->id;
        $toEditCrime = Crime::findOrFail($request->id);
        if ($toEditCrime->user_id === $currentAuthUserId) {
            $toEditCrime->title = $request->title;
            $toEditCrime->description = $request->description;
            $toEditCrime->city_id = $request->city_id;
            $toEditCrime->user_id = $currentAuthUserId;
            $toEditCrime->weapon_id = $request->weapon_id;
            $toEditCrime->victim = $request->victim;
            return redirect()->route('feed');
        } else {
            return abort(403);
        }
    }

    public function deleteCrime (Request $request) {
        $currentAuthUserId = auth()->user()->id;
        $toDeletedCrime = Crime::findOrFail($request->id);

        if ($toDeletedCrime->user_id === $currentAuthUserId) {
            $toDeletedCrime->delete();
            return redirect()->route('feed');
        } else {
            return abort(403);
        }
    }
}
