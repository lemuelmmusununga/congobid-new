<div>
    <div class="block-items-2">
        <div class="row">
            <div class="col-4">
                <div class="item">
                    <h4> {{ Auth::user()->bideurs->first()->balance }} </h4>
                    <p class="mb-0">Bids</p>
                </div>
            </div>
            <div class="col-4">
                <div class="item">
                    <h4> {{ Auth::user()->bideurs->first()->bonus }} </h4>
                    <p class="mb-0">Bids bonus</p>
                    @if ( (Auth::user()->bideurs->first()->bonus / 2 ) >= 1)
                        <button class=" btn btn-primary rounded-3" wire:click.prevent="bidBonus({{ 2 }})">  {{ Str::before((Auth::user()->bideurs->first()->bonus / 2 ), '.')}} bid(s) </button>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="item">
                    <h4> {{ Auth::user()->bideurs->first()->nontransferable }} </h4>
                    <p class="mb-0">Bids non transferables</p>

                </div>
            </div>
        </div>
    </div>
</div>
