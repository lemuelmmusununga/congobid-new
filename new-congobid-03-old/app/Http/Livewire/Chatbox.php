<?php

namespace App\Http\Livewire;

use App\Models\Chat_enchere;
use Livewire\Component;
use Illuminate\Support\Str;

class Chatbox extends Component
{
    public $messages,$enchere,$message ,$enchere_id ;
    public function send(){


        if (Str::length($this->message) > 0) {
            # code...
            $this->send_message= Chat_enchere::create([
                'user_id' => auth()->user()->id,
                'libelle'=>$this->message,
                'enchere_id'=>$this->enchere_id,
            ]);
            $this->message ='';
        }
    }
    public function render()
    {
        $this->messages = Chat_enchere::where('enchere_id',$this->enchere_id)->orderby('id','ASC')->get();
        return view('livewire.chatbox');
    }
}
