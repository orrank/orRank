<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class QrCode extends Component
{
    public $uniqueid;
    
    public function render()
    {
        return view('livewire.components.qr-code');
    }
}
