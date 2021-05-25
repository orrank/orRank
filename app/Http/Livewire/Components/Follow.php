<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\User;
use App\Follow;
use Auth;

class Follow extends Component
{
    public function render()
    {
        return view('livewire.components.follow');
    }
}
