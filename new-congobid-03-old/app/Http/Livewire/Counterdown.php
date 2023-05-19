<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counterdown extends Component
{
    public $seconds = 10;
    public $interval = 1;
    public function mount()
    {
        $this->seconds = 10;
    }

    public function decrement()
    {
        $this->seconds -= $this->interval;

        if ($this->seconds < 0) {
            $this->seconds = 0;
        }
        
        if ($this->seconds == 0) {
            $this->emit('refreshCountdown');
            // Ajoutez du code pour gérer la fin du compte à rebours ici
        }
    }

    public function updatedSeconds()
    {
        $this->emit('refreshCountdown');
    }

    public function render()
    {
        return view('livewire.counterdown');
    }
}
