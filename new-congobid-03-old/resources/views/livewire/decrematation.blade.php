<div>
    <div wire:ignore.self class="progress my-3 shadow-lg position-relative {{ Request::is('/') ? 'd-none' : ''   }}  " style="height: 20px;background:#fff;">

        <div class="progress-bar " role="progressbar" aria-label="progresse" style="width: {{$progresse}}px;background:#ffad75;" aria-valuenow="{{ Str::before($progresse, '.') }}" aria-valuemin="0" aria-valuemax="100">
            @if (Str::before($progresse, '.') > 50 )
                <div class="pourcentage position-absolute w-100 h-100 d-flex align-items-center justify-content-center" style="z-index: 2; color: #000">
                    {{ Str::before($progresse, '.') }}%
                </div>
            @else
                <div class="pourcentage position-absolute w-100 h-100 d-flex align-items-center justify-content-center text-danger fw-bold" style="z-index: 2; color: #000">
                    {{ Str::before($progresse, '.') }}%
                </div>
            @endif
        </div>
    </div>
    <div wire:ignore.self class="text-center">
        <div wire:poll.1s>
            <h4 class="text-success">{{   Str::length(Str::before(($munite /60), '.')) == 1 ? '0'. Str::before(($munite /60), '.'):Str::before(($munite /60), '.') }}:{{ Str::length( ($munite % 60)) == 1 ? ('0'.$munite % 60) : ($munite % 60)  }}:{{ Str::length( $times) == 1 ? '0'. $times :  $times}}  </h4></h4>
        </div>
    </div>
</div>