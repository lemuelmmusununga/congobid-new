{{-- 
    <div class="col-12 text-center">
        @if (Auth::user())
            <?php
                $favori_enchere =App\Models\Favoris::where('enchere_id', $article->enchere?->id)->where('user_id', Auth::user()->id)->first() ?? null;
            ?>
            
            @if ($favori_enchere != null )
                @if (Auth::user() && $favori_enchere->favoris == 1 && Auth::user()->id == $favori_enchere->user_id)
                    <a href="{{route('delete.favoris',['id'=>$article->enchere?->id,'user'=>Auth::user()->id])}}" class="btn btn-3d-rounded-sm">
                        <i class="fi fi-rr-plus"></i> Favorie
                    </a>
                @else
                    <a href="{{route('add.favoris',['id'=>$article->enchere?->id,'user'=>Auth::user()->id]) }}" class="btn btn-3d-rounded-sm">
                        <i class="fi fi-rr-plus"></i> Ajouter aux favories
                    </a>
                @endif
            @endif
        @else
            <a href="/register" class="btn btn-3d-rounded-sm">
                <i class="fi fi-rr-plus"></i> Ajouter aux favories
            </a>
        @endif
    </div>  

 --}}

 <div class="col-12 text-center">
    @if (Auth::user())
        @if (Auth::user()->pivotBideurEnchere->where('enchere_id', $article->enchere->id)->first() == null)
            <a href="#" data-toggle="modal" data-target="#future{{$key}}" class="btn btn-3d-rounded-sm">
                <i class="fi fi-rr-plus"></i> Participer à l'enchère
            </a>
        @else
            <a href="{{ route('show.detail', ['id' => $article->id,'name'=>$article->titre]) }}" class="btn btn-3d-rounded-sm">
                <i class="fi fi-rr-plus"></i> Ouvrir l'enchere
            </a>
        @endif
    @else
        <a href="{{ route('register') }}" class="btn btn-3d-rounded-sm">
            <i class="fi fi-rr-plus"></i> Participer à
            l'enchère 
        </a>
    {{-- <a href="#" class="btn-participer" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify" data-icon="akar-icons:plus"></span> Participer à l' enchère</a> --}}
    @endif
</div>

