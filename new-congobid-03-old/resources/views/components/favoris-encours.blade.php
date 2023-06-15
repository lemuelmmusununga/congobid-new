<div class="text-center mb-3">

    @if (Auth::user())
        <?php
        $favori_enchere =
            App\Models\Favoris::where('enchere_id', $article->enchere->id)
                ->where('user_id', Auth::user()->id)
                ->first() ?? '';
        ?>
    @endif

    @if (Auth::user())
        @if (Auth::user() && $favori_enchere != null && $favori_enchere->favoris == 1 && Auth::user()->id == $favori_enchere->user_id)
            <a href="#" class="like"
                wire:click.prevent="like({{ Auth::user()->id }}, 0,{{ $article->enchere->id }})" wire:loading.attr="desabled">
                <span class="iconify" style="color:red;"
                    ><i class="bi bi-heart-fill"></i></span>
            </a>
        @else
            <a href="#" class="like" data-bs-toggle="modal"
           
                wire:click.prevent="like({{ Auth::user()->id }}, 1,{{ $article->enchere->id }})">
                <span class="iconify"
                    ><i class="bi bi-heart"></i></span>
            </a>
        @endif
    @else
        <a href="/login"
            class="like">
            <span class="iconify"
                ><i class="bi bi-heart"></i></span>
        </a>
    @endif
    <span>{{ $article->enchere->favoris }}
        {{ $article->enchere->favoris < 2 ? 'vote' : 'votes' }}</span>
</div>
