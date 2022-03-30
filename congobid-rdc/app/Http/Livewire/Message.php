<?php

namespace App\Http\Livewire;

use App\Models\Message as Chat;
use Livewire\Component;

class Message extends Component
{
    public $message='',$user,$send_message;
    public function send(){
        $this->user = auth()->user()->id;
        
        $this->send_message= Chat::create([
            'user_id' => $this->user,
            'libelle'=>$this->message
        ]);



        $this->message ='';

    }
    public function render()
    {
        return view('livewire.message');
    }
}
