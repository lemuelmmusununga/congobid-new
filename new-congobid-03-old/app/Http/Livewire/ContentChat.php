<?php

namespace App\Http\Livewire;
use App\Models\Message;
use Livewire\Component;

class ContentChat extends Component
{


    public function render()
    {
        return view('livewire.content-chat',[
            'messages' => Message::orderby('created_at','ASC')->get(),
        ]);
    }
}
