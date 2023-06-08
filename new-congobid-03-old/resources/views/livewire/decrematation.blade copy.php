<div>
    <div class="text-center">
        <p>Temps <br>
            <div class='container'>
                <span class='timer text-black' data-minutes-left=1></span>
                <section class='actions'></section>
            </div>
            {{-- @php
                $dates = json_encode($date_enchere );
                $heures = json_encode($heures_enchere );

             @endphp
             <span id="dates" data-dates = "{{  json_decode($dates ) }}">{{ $dates  }}</span>
            <div wire.ignore.self class="countdown">
                <span id="clock" class="text-black"></span> --}}
            <!-- end of countdown -->

            <div >

                {{-- <h4>{{  Str::before(($munite /60), '.')}}:{{ ($munite % 60) }}:{{ $times }} s </h4>
                <h4>{{ $munite}} ' : {{ $times }} '' </h4>
                <hr> --}}
                <h6>Prix de l'enchere</h6>

                <h5 class="fw-bold text-success"> $ {{Str::substr($incrementation,0,6)}} </h5>
                <hr>
            </div>
        </p>
    </div>
</div>
