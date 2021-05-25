<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\User;
use Auth;
class FollowButton extends Component
{
    public $fclz, $ficon, $ftxt, $frdId;

    public function mount()
    {
        if(Auth::User()->isFollowing($this->frdId))
        {
            $this->fclz = 'btn-danger';
            $this->ficon = 'fa-times';
            $this->ftxt = 'Unfollow';
        }
        else
        {
            $this->fclz = 'btn-success';
            $this->ficon = 'fa-heart';
            $this->ftxt = 'Follow';
        }

    }

    public function render()
    {
        return view('livewire.components.follow-button');
    }
}
