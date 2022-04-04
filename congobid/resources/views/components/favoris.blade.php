    <?php
        $favoris = 0;
        foreach ($article->enchere->pivotbideurenchere as $favori) {
            $favoris = $favoris + $favori->favoris;
        }
    ?>
    @if (Auth::user() && Auth::user()->role_id == 5)
        <div class="text-center mb-3">
            <p class="mb-0">
                Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
            </p>
            @if ($article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->count() == 1)
                <a href="#" class="like" wire:click.prevent="like({{ $article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->id }}, 1)">
                    @if ($article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->favoris == 1)
                        <span class="iconify" style="color:red;" data-icon="ant-design:heart-fill"></span>
                    @else
                        <span class="iconify" data-icon="ant-design:heart-outlined"></span>
                    @endif
                </a>
            @else
                <a href="#" class="like" wire:click.prevent="like({{ $article->enchere->id }}, 0)">
                    <span class="iconify" data-icon="ant-design:heart-outlined"></span>
                </a>
            @endif
            <span>{{ $favoris ?? '0' }} {{ $favoris < 2 ? 'vote' : 'votes' }}</span>
        </div>
    @elseif (Auth::user() && Auth::user()->role_id != 5)
        <div class="text-center mb-3">
            <p class="mb-0">
                Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
            </p>
            <a href="#" class="like">
                <span class="iconify" data-icon="ant-design:heart-outlined"></span>
            </a>
            <span>{{ $favoris ?? '0' }} {{ $favoris < 2 ? 'vote' : 'votes' }}</span>
        </div>
    @else
        <div class="text-center mb-3">
            <p class="mb-0">
                Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
            </p>
            <a href="{{ route('login') }}" class="like">
                <span class="iconify" data-icon="ant-design:heart-outlined"></span>
            </a>
            <span>{{ $favoris ?? '0' }} {{ $favoris < 2 ? 'vote' : 'votes' }}</span>
        </div>
    @endif
