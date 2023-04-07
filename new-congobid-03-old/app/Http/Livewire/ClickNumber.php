<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Enchere;
use App\Models\Bideur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class ClickNumber extends Component
{

    public $counter = 0;
    public $client = '';
    public $users ;
    public $click ='';
    public $bid;
    public $ids;
    public function counter(){

    }
    public function mount(){
      $this->client = auth()->user()->id;

    }

    public function update(){

        $add = Enchere::find($this->ids);
        $addClick =['click'=>$this->bid+1];
        $creatEncheres = [
            'click'=>$this->bid+1,
            'statut_id'=>5,
            'bideur_id'=>auth()->id(),
            'article_id'=>1,
            'paquet_id'=>1
        ];
        if (isset($add)) {
            $add->update(
                $addClick
            );
        }else{

            $id_bideur =Auth::user()->bideurs->first();

            Enchere::create([
                'bideur_id'=>$id_bideur->id,
                'click'=>$this->bid+1,
                'statut_id'=>5,
                'article_id'=>1,
                'paquet_id'=>1
            ]);


        }
    }
    public function render()
    {
        if (Auth::user()) {
            $this->users = Auth::user()->bideurs->first();
            foreach ($this->users->encheres as $key => $value) {
                $this->bid = $value->click;
                $this->ids = $value->id;
            }
        }

        return view('livewire.click-number');
    }
}
