<div>
    <form class="d-flex" style="position: relative">
        <input class="form-control me-2" type="search" placeholder="Recherche..." aria-label="Search" wire:model='search'>
        <span class="btn" type="submit">
            <span class="iconify" data-icon="akar-icons:search"></span>
        </span>
    </form>


    @if ( Str::length($search)>0)

            <div class="block-result-search">

                @foreach ($articles as  $article )

                    <a class="nav-link text-white m-0 p-0" href="#{{ $article->titre }}">{{$article->titre}}</a>
                    <hr class="text-white">

                @endforeach

            </div>
    @endif


</div>
