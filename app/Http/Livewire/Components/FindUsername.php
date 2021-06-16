<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FindUsername extends Component
{
    public $username, $ursavailable; 

    public function render()
    {
        if($this->username != "")
        {
            $usrcount = User::where('username', $this->username)->count();

            if ($usrcount == 1) {
                if ($this->username == Auth::user()->username) 
                    $this->ursavailable = '<small class="text-warning">You can\'t share your queue to your username</small>';
                else
                    $this->ursavailable = '<small class="text-success">This username available for sharing</small>';
            }
            else {
                $this->ursavailable = '<small class="text-danger">Please enter a valid username</small>';
            }
        }
        return view('livewire.components.find-username');
    }
}
