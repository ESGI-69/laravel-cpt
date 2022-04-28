<?php

namespace App\Http\Controllers;

use App\Models\Crime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show ()
    {
     $crimes = Crime::where('user_id', Auth::user()->id)
     ->orderBy('created_at', 'desc')
     ->get();
      return view('profile', ['user' => Auth::user(), 'crimes' => $crimes]);
    }
}
