<?php

namespace App\Http\Livewire;

use App\Models\Favorite as ModelsFavorite;
use Livewire\Component;
use App\Models\Favorite as Like;
use Illuminate\Support\Facades\Auth;
class Favorite extends Component
{
    public $user,$enchere,$likes;
    public function mount($article){
        $this->likes = Like::where('user_id',Auth::user()->id)->where('enchere_id',$article)->first();
    }
    public function favorite($enchere,$user){
        $this->enchere = $enchere;
        $this->user = $user;
        $find = Like::where('user_id',auth()->user()->id)->where('enchere_id',$this->enchere)->first();
        if ($find == null) {
            $create = Like::create([
                'user_id' =>$this->user,
                'enchere_id'=>$this->enchere,
                'etat'=>1
            ]);
        }else if($find->etat == 1){
            $find->update([

                'etat'=>0
            ]);
        }else{
            $find->update([

                'etat'=>1
            ]);
        }
    }
    public function render()
    {
        return view('livewire.favorite');
    }
}
