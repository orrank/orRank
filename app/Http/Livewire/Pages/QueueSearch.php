<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Queue;
use Auth;

class QueueSearch extends Component
{
    use WithPagination;

    public $search, $queues, $userid;

    public function mount()     
    {
        $this->queues = Queue::where('user_id', $this->userid)->get();
    }
    public function render()
    {
        if ($this->search != "") {
            $this->queues = Queue::where([['user_id', '=', $this->userid],
            ['name', 'LIKE', '%'.$this->search.'%']])->get();
        }
        else {
            $this->queues = Queue::where('user_id', $this->userid)->get();
        }
        return view('livewire.pages.queue-search');
    }
}
