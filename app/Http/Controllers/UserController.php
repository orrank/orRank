<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Auth;
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

    public function update()
    {
        return view('user.edit');
    }

    public function infoUpdate(Request $request)
    {
        $data = User::find(Auth::user()->id);

        $data->firstname  = $request->firstname;
        $data->lastname  = $request->lastname;
        $data->bio  = $request->bio;
        $data->company  = $request->company;
        $data->location  = $request->location;

        if ($data->save()) {

            $request->session()->flash('alert-green', 'New Subject Successfully added...');
            return redirect()->back();
        }
        else
        {
            $request->session()->flash('alert-red', 'New Subject adding failed. Try again...');
            return redirect()->back();
        }

    }

    public function imageRemove()
    {
        $data = User::find(Auth::user()->id);

        $data->profile_image = '';

        if ($data->save()) {
            return redirect()->back();
        }
    }

    public function imageUpdate(Request $request)
    {
        if($request->hasFile('profile_image')){
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('profile_image')->move('uploads/images/users', $fileNameToStore);
        } else {
            $fileNameToStore = null;
        }

        $data = User::find(Auth::user()->id);

        $data->profile_image = $fileNameToStore;

        if ($data->save()) {

            $request->session()->flash('alert-green', 'New Subject Successfully added...');
            return redirect()->back();
        }
        else
        {
            $request->session()->flash('alert-red', 'New Subject adding failed. Try again...');
            return redirect()->back();
        }
    }

    public function darkMode(Request $request, $state)
    {
        $data = User::find(Auth::user()->id);
        if($state == 'enable')
            $data->isDark = 1;
        else if($state == 'disable')
            $data->isDark = 0;
        else
            return redirect()->back();

        if ($data->save())
            return redirect()->back();
    }
}
