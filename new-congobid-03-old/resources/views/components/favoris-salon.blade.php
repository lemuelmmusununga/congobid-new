<div class="text-center mb-3">
    <p class="mb-0">
        Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
    </p>
    @if (Auth::user())
        <?php
        $favori_salon =
            App\Models\SalonLike::where('salon_id', $salon->id)
                ->where('user_id', Auth::user()->id)
                ->first() ?? '';
        $nombre = App\Models\SalonLike::where('salon_id', $salon->id)->where('favoris', 1)->get() ?? '';
        ?>
    @endif

    @if (Auth::user())
        @if ($favori_salon != null && $favori_salon->favoris == 1 && Auth::user()->id == $favori_salon->user_id)
            <a href="#" class="like"
                wire:click.prevent="likeSalon({{ Auth::user()->id }}, 0,{{ $salon->article->enchere->id }})" wire:loading.attr="desabled">
                <span class="iconify" style="color:red;"><i class="bi bi-heart-fill"></i></span>
            </a>
        @else
            <a href="#" class="like" data-bs-toggle="modal"
                wire:click.prevent="likeSalon({{ Auth::user()->id }}, 1,{{ $salon->article->enchere->id }})">
                <span class="iconify"><i class="bi bi-heart"></i></span>
            </a>
        @endif
    @else
        <a href="/login"
            class="like">
            <span class="iconify"><i class="bi bi-heart"></i></span>
        </a>
    @endif
    <span>{{ count($nombre) }}{{ count($nombre) < 2 ? 'vote' : 'votes' }}</span>
</div>
