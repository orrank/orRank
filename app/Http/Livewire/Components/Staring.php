<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Rating;

class Staring extends Component
{
    public $queueId, $totalrating, $clz1, $clz2, $clz3, $clz4, $clz5;

    public function addStar($score)
    {
        $count = Rating::where([['user_id', '=', Auth::user()->id], ['queue_id', '=', $this->queueId]])->count();
        if($count == 1)
        {
            Rating::where(['user_id'=> Auth::user()->id,'queue_id'=> $this->queueId])->update(['rate'=> $score]);
        }
        else
        {
            $data = new Rating;
            $data->queue_id = $this->queueId;
            $data->user_id = Auth::user()->id;
            $data->rate = $score;
            $data->feedback = '';
            $data->save();    
        }

        $this->totalrating = Rating::where('queue_id', $this->queueId)->count();

        if($score == 1)
        {
            $this->clz1 = 'yellow';
            $this->clz2 = '';
            $this->clz3 = '';
            $this->clz4 = '';
            $this->clz5 = '';
        }
        else if($score == 2)
        {
            $this->clz1 = 'yellow';
            $this->clz2 = 'yellow';
            $this->clz3 = '';
            $this->clz4 = '';
            $this->clz5 = '';
        }
        else if($score == 3)
        {
            $this->clz1 = 'yellow';
            $this->clz2 = 'yellow';
            $this->clz3 = 'yellow';
            $this->clz4 = '';
            $this->clz5 = '';
        }
        else if($score == 4)
        {
            $this->clz1 = 'yellow';
            $this->clz2 = 'yellow';
            $this->clz3 = 'yellow';
            $this->clz4 = 'yellow';
            $this->clz5 = '';
        }
        else if($score == 5)
        {
            $this->clz1 = 'yellow';
            $this->clz2 = 'yellow';
            $this->clz3 = 'yellow';
            $this->clz4 = 'yellow';
            $this->clz5 = 'yellow';
        }
    }

    public function mount()
    {
        $starred = Rating::where([['user_id', '=', Auth::user()->id], ['queue_id', '=', $this->queueId]])->first();
        $this->totalrating = Rating::where('queue_id', $this->queueId)->count();

        if($starred)
        {
            if($starred->rate == 1)
            {
                $this->clz1 = 'yellow';
            }
            else if($starred->rate == 2)
            {
                $this->clz1 = 'yellow';
                $this->clz2 = 'yellow';
            }
            else if($starred->rate == 3)
            {
                $this->clz1 = 'yellow';
                $this->clz2 = 'yellow';
                $this->clz3 = 'yellow';
            }
            else if($starred->rate == 4)
            {
                $this->clz1 = 'yellow';
                $this->clz2 = 'yellow';
                $this->clz3 = 'yellow';
                $this->clz4 = 'yellow';
            }
            else if($starred->rate == 5)
            {
                $this->clz1 = 'yellow';
                $this->clz2 = 'yellow';
                $this->clz3 = 'yellow';
                $this->clz4 = 'yellow';
                $this->clz5 = 'yellow';
            }
        }
    }

    public function render()
    {
        return view('livewire.components.staring');
    }
}
