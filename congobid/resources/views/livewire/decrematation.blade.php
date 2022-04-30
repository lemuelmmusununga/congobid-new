<div>
    <div class="text-center">
        <p>Temps <br>
            <div wire:poll.1s>
                {{-- <h4>{{ ($munite / 60) % 10 }}:{{ (($munite / 60) - (($munite / 60) % 10)) * 100 }}:{{ $times }} s </h4> --}}
                <h4>{{ $munite}} ' : {{ $times }} '' </h4>
                <hr>
                <h6>Prix de l'enchere</h6>

                <h5 class="fw-bold text-success"> $ {{Str::substr($incrementation,0,6)}} </h5>
                <hr>
            </div>
        </p>
    </div>
</div>
