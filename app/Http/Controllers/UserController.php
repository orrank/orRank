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

    public function update()
    {
        return view('user.edit');
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

        $data = User::find($request->userID);

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
}
