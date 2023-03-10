<?php

namespace App\Http\Livewire;

use App\Models\Message as Chat;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Bideur;
use Illuminate\Support\Str;
class Message extends Component
{
    public $message='',$user,$send_message;
    public function send(){

        $this->user = auth()->user()->id;

        if (Str::length($this->message) > 0) {
            # code...
            $this->send_message= Chat::create([
                'user_id' => $this->user,
                'libelle'=>$this->message
            ]);
            
            $this->message ='';

        }
    }
    public function render()
    {
         //connexion user
        //  if (Auth::user()) {
        //     $this->addbid = User::where('id',Auth::user()->id)->first();
        //     $bideur = Bideur::where('user_id',Auth::user()->id)->first();
        //     if ($this->addbid->user_conneted_at == null) {
        //         $this->addbid->update([
        //             $this->addbid->user_conneted_at =now()
        //         ]);
        //     }
        //     $heur_acces = now()->format('H') - date('H',strtotime($this->addbid->user_conneted_at));
        //     if (now()->format('i') > date('i',strtotime($this->addbid->user_conneted_at))) {
        //         $munite_acces = now()->format('i') - date('i',strtotime($this->addbid->user_conneted_at));


        //     } else {
        //         $munite_acces = date('i',strtotime($this->addbid->user_conneted_at))-now()->format('i');
        //     }
        //     if (date('d-m-Y',strtotime($this->addbid->user_conneted_at)) == now()->format('d-m-Y') && $munite_acces >5) {
        //        $balance = $bideur->balance + 10;

        //         $bideur->update([
        //             'balance' =>$balance
        //         ]);
        //         $this->addbid->update([
        //             $this->addbid->user_conneted_at ="2022-05-24 06:40:28"
        //         ]);
        //     }
        // }
        //end
        return view('livewire.message');
    }
}
