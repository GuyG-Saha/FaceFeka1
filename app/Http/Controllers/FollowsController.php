<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user) {
        return auth()->user()->following()->toggle($user->profile); // call the toggle method to toggle between
        // connected profile and not connected profile. This refers to selected user's profile
    }
}
