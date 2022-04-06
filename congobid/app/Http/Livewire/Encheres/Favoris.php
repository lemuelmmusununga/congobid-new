<?php

namespace App\Http\Livewire\Encheres;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\PivotBideurEnchere;
class Favoris extends Component
{
    public $article = '',$like;
    public function mount($article){
        $this->article = $article;
    }
    public function like($id, $state){

        $find = PivotBideurEnchere::where('id', $id)->first();
        // dd($state);
        if ($state == 1) {
            if ($find->favoris == 0) {
                $this->like += 1;
                $find->update([
                    'favoris' => $this->like,
                ]);
            } else {
                // dd('hello !');
                $this->like -= 0;
                $find->update([
                    'favoris' => $this->like,
                ]);
            }
            $this->counter_like = $find->favoris;
        } else {
            $this->like += 1;
            $find = PivotBideurEnchere::create([
                'favoris' => $this->like,
                'enchere_id' => $id,
                'statut_id' => 3,
                'user_id' => Auth::user()->id,
            ]);
            $this->counter_like = $find->favoris;
        }
    }
    public function render()
    {
        

        return view('livewire.encheres.favoris');
    }
}
