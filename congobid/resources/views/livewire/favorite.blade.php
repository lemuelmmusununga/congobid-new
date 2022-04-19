<div>

@if (Auth::user() && Auth::user()->role_id == 5)
    <div class="text-center mb-3">
        <p class="mb-0">
            Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
        </p>


        @if ($likes->etat ?? '' == null)
            <a href="#" class="like" wire:click.prevent="favorite({{Auth::user()->id}})">
                    <span class="iconify" style="color:red;" data-icon="ant-design:heart-fill"></span>

            </a>
        @else
            <a href="#" class="like" wire:click.prevent="favorite({{Auth::user()->id}})">
                <span class="iconify" data-icon="ant-design:heart-outlined"></span>
            </a>
        @endif
        {{-- <span>{{ $favoris ?? '0' }} {{ $favoris < 2 ? 'vote' : 'votes' }}</span> --}}
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

</div>
