<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class CounteMumberSalon extends Component
{
    public $getcount = 1, $count,$salon_type;
    public $prises, $article, $users;
    public function mount($article)
    {
        $this->prises = $article->prix_marche;
        $this->users = User::select('id', 'username')->get();
    }

    public function render()
    {
        $this->count = ceil((100 * (($this->prises) * 5 / ($this->getcount >= 1 ? $this->getcount : 1))));

        return view('livewire.counte-mumber-salon');
    }
}
