<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Rating;

class DeviceStaring extends Component
{
    public $queueId, $response, $clz1, $clz2, $clz3, $clz4, $clz5, $success = false;

    public function addStar($score)
    {

        $data = new Rating;
        $data->queue_id = $this->queueId;
        $data->rate = $score;
        $data->feedback = '';
        $data->save();  
        
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

        $this->success = true;

    }

    public function render()
    {
        return view('livewire.components.device-staring');
    }
}
