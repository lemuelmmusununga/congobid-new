    @if (Auth::user() && Auth::user()->role_id == 5)
        <div class="text-center mb-3">
            <p class="mb-0">
                Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
            </p>
            <a href="#" class="like" wire:click.prevent="like({{ $article->id }})">
                <span class="iconify" style=" {{Auth::user()->id == 1 ? 'color:red;':''}}" data-icon="ant-design:heart-fill"></span>
            </a>
            <span>{{$article->enchere->favoris ?? '0'}} {{$article->enchere->favoris < 2 ? 'vote' : 'votes' }}</span>
        </div>
    @else
        <div class="text-center mb-3">
            <p class="mb-0">
                Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
            </p>
            <a href="#" class="like" wire:click.prevent="like({{ $article->id }})">
                <span class="iconify" data-icon="ant-design:heart-outlined"></span>
            </a>
            <?php
                $favoris = 0;
                foreach ($article->enchere->pivotbideurenchere as $favori) {
                    $favoris = $favoris + $favori->favoris;
                }
            ?>
            <span>{{ $favoris }}</span>
            {{-- <span>{{$article->enchere->favoris ?? '0'}} {{$article->enchere->favoris < 2 ? 'vote' : 'votes' }}</span> --}}
        </div>
    @endif
