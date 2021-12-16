<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function chooseEvent(Request $request) {
        if (!Auth::check()) {
            return redirect('login');
        }

        $userId = Auth::user()->id;
        $eventId = $request->event_id;

        $user = User::find($userId);

        if(!Event::find($eventId)->exists()) return back();

        $user->events()->attach($eventId);

        return redirect('/player');
    }
}

