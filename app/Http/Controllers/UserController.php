<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index($username)
    {
        $user = User::where('username', $username)->first(); 
        $bladeData = [
            'user' => $user
        ];
        $count = User::where('username', $username)->count();
        if($count == 1)
            return view('profile', $bladeData);
        else
            return view('error.404');
    }

    public function dashboard($username)
    {
        return view('dashboard');
    }

    public function profile()
    {
        return view('user.profile');
    }
}
