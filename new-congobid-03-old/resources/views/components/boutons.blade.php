
    <div class="col-12 text-center">


        @if (Auth::user())
            {{-- <a href="{{ route('show.detail', ['id' => $article->id,'name'=>$article->titre]) }}" class="btn btn-3d-rounded-sm">
                <i class="fi fi-rr-plus"></i> Ouvrir l'enchere</a> --}}
            @if ($article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first() != null)
            <a href="{{ route('show.detail', ['id' => $article->id,'name'=>$article->titre]) }}" class="btn btn-3d-rounded-sm">
                <i class="fi fi-rr-plus"></i> Ouvrir l'enchere
            </a>
            {{-- <a href="#" class="btn-participer btn-gray " style="border-radius: 10px;" disabled = "disabled" data-bs-toggle="modal"
                data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify"
                    data-icon="akar-icons:plus"></span> Participer à l'enchère</a>  --}}
            @else
                <a href="#" data-toggle="modal" data-bs-target="#modalEncheresy_{{$key}}"  class="btn btn-3d-rounded-sm">
                    <i class="fi fi-rr-plus"></i> Participer à l'enchèrefwefewf
                </a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEncheresy_{{$key}}">
                    Launch demo modal
                </button>
                {{-- <a href="#" class="btn-participer" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify" data-icon="akar-icons:plus"></span> Participer à l' enchère</a> --}}
            @endif
        @else
        <a href="{{ route('register') }}" class="btn btn-3d-rounded-sm">
            <i class="fi fi-rr-plus"></i> Participer à
            l'enchère
        </a>
        {{-- <a href="#" class="btn-participer" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify" data-icon="akar-icons:plus"></span> Participer à l' enchère</a> --}}
        @endif
       
    </div>
    

