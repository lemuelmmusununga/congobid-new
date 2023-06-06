
    <div class="col-12 text-center">
        @if (Auth::user())
            @if (Auth::user()->pivotBideurEnchere->where('enchere_id', $article->enchere->id)->first() == null)
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$key}}" class="btn btn-3d-rounded-sm">
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
    

