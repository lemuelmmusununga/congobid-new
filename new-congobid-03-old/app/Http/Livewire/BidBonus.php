<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bideur;
use Illuminate\Support\Facades\Auth;
class BidBonus extends Component
{
    public function bidBonus($bid){

        $bonus = Bideur::where('user_id',Auth::user()->id)->first();
        $bonus->update([
            'balance'=>$bonus->balance + $bid,
            'bonus' => 0,
        ]);
    }
    public function render()
    {
        return view('livewire.bid-bonus');
    }
}
