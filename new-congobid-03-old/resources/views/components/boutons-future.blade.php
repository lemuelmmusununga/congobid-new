
    <div class="col-12 text-center">
        @if (Auth::user())
            <?php
                $favori_enchere =App\Models\Favoris::where('enchere_id', $article->enchere?->id)->where('user_id', Auth::user()->id)->first() ?? '';
            ?>
            @if (Auth::user() && $favori_enchere != null && $favori_enchere->favoris == 1 && Auth::user()->id == $favori_enchere->user_id)
                <a href="{{route('add.favoris','id'=>$article->enchere?->id,'user'=>Auth::user()->id)}}" class="btn btn-3d-rounded-sm">
                    <i class="fi fi-rr-plus"></i> Favorie
                </a>
            @else
                <a href="{{route('delete.favoris','id'=>$article->enchere?->id,'user'=>Auth::user()->id)}}" class="btn btn-3d-rounded-sm">
                    <i class="fi fi-rr-plus"></i> Ajouter aux favories
                </a>
            @endif
        @else
            <a href="/register" class="btn btn-3d-rounded-sm">
                <i class="fi fi-rr-plus"></i> Ajouter aux favories
            </a>
        @endif
    </div>  


