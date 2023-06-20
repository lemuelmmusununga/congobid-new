<div wire:poll.keeplive>
    @if ($enchere->munite * 60 + $enchere->seconde < 1)
        @include('components.gagne')
    @endif
</div>
