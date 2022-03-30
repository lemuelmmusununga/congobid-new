<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class AllArticles extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $articles=[],$ids;
    public function mount($ids){
        $this->ids = $ids;

    }
    public function render()
    {
        $this->articles=Article::where('categorie_id',$this->ids)->get();

        return view('livewire.articles.all-articles',['articles'=>$this->articles]);
    }
}
