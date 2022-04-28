<?php

namespace App\Http\Controllers;

use App\Models\Crime;
use App\Models\User;
use App\Models\Weapon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile ()
    {
     $crimes = Crime::where('user_id', Auth::user()->id)
     ->orderBy('created_at', 'desc')
     ->get();

      return view('profile', ['user' => Auth::user(), 'crimes' => $crimes]);
    }

    public function editProfile (User $user)
    {
        return view('profile.edit', [
          'user' => $user
        ]);

    }

    public function updateProfile(Request $request, User $user)
    {
      $user->update([
        'body' => $request->body,
      ]);

      return redirect()->route('my.edit', ['user' => $user]);
    }

    // public function update(Request $request, Message $message)
    // {
    //     $message->update([
    //         'body' => $request->body,
    //     ]);

    //     return redirect()->route('messages.show', ['message' => $message]);
    // }
}
