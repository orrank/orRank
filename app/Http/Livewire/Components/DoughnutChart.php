<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

use App\Models\Rating;

class DoughnutChart extends Component
{
    public $queue, $total, $s1, $s2, $s3, $s4, $s5;

    public function mount()
    {
        $this->s1 = Rating::where(['queue_id'=> $this->queue, 'rate' => 1])->count();
        $this->s2 = Rating::where(['queue_id'=> $this->queue, 'rate' => 2])->count();
        $this->s3 = Rating::where(['queue_id'=> $this->queue, 'rate' => 3])->count();
        $this->s4 = Rating::where(['queue_id'=> $this->queue, 'rate' => 4])->count();
        $this->s5 = Rating::where(['queue_id'=> $this->queue, 'rate' => 5])->count();

        $this->total = Rating::where('queue_id', $this->queue)->count();
    }

    public function render()
    {
        return view('livewire.components.doughnut-chart');
    }
}
