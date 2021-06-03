<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Queue;
use Auth;

class QueueSearch extends Component
{
    use WithPagination;

    public $search, $queues;

    public function searchx()
    {
        $this->search = $this->search;
    }
    public function mount()     
    {
        $this->queues = Queue::where('user_id', Auth::user()->id)->get();
    }
    public function render()
    {
        if ($this->search != "") {
            $this->queues = Queue::where('name', 'LIKE', '%'.$this->search.'%')->get();
        }
        else {
            $this->queues = Queue::where('user_id', Auth::user()->id)->get();
        }
        return view('livewire.pages.queue-search');
    }
}
