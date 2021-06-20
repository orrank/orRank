<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\User;
use App\Models\Follow;
use Illuminate\Support\Facades\Auth;

use Notification;
use App\Notifications\Followed;


class FollowButton extends Component
{
    public $fclz, $ficon, $ftxt, $frdId;

    public function xfollow(User $user)
    {
        $count = Follow::where([['user_id', '=', Auth::user()->id], ['target_id', '=', $this->frdId]])->count();
        if($count == 1)
        {
            Follow::where([['user_id', '=', Auth::user()->id], ['target_id', '=', $this->frdId]])->delete();
            $this->fclz = 'btn-success';
            $this->ficon = 'fa-check';
            $this->ftxt = 'Follow';
        }
        else
        {
            $data = new Follow;
            $data-> user_id = Auth::user()->id;
            $data-> target_id = $this->frdId;

            if($data->save())
            {
                $details = [
                    'subject' => '~'.Auth::user()->username . ' followed you',
                    'greeting' => 'Hello  👋',
                    'body' => '~'. Auth::user()->username . ' followed you on OrRank.',
                    'thanks' => 'Thank you for using OrRank!'
                ];

                $user = User::where('id', $this->frdId)->get();
    
                Notification::send($user, new Followed($details));

                $this->fclz = 'btn-danger';
                $this->ficon = 'fa-times';
                $this->ftxt = 'Unfollow';
            }
        }
    }

    public function mount()
    {
        $count = Follow::where([['user_id', '=', Auth::user()->id], ['target_id', '=', $this->frdId]])->count();
        if($count == 1)
        {
            $this->fclz = 'btn-danger';
            $this->ficon = 'fa-times';
            $this->ftxt = 'Unfollow';
        }
        else
        {
            $this->fclz = 'btn-success';
            $this->ficon = 'fa-check';
            $this->ftxt = 'Follow';
        }

    }

    public function render()
    {
        return view('livewire.components.follow-button');
    }
}
