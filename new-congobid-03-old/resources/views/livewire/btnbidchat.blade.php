<div>
    @php
        $encheres = App\Models\Enchere::where('date_debut','<=',now()->format('Y-m-d H:'))->first();
        $find = Auth::user()->pivotBideurEnchere->last();
        if ($find != null) {
            # code...
            // $pivot =(App\Models\PivotBideurEnchere::where('enchere_id',$find->id)->where('user_id',Auth::user()->id)->first());
            $sanction= App\Models\Sanction::where('enchere_id',$find->id)->where('statut',1)->where('deleted_at',null)->first();

        }
        // dd($find->id,$pivot->valeur,now()->format('d-m-Y'));
        // $verify_sanction =(App\Models\Sanction::where('enchere_id',$article)->where('user_id',Auth::user()->id)->first());
    @endphp

    {{-- Nothing in the world is as soft and yielding as water. --}}
    @if (Auth::user() && $find != null && ($find->enchere->munite * $find->enchere->seconde ) > 0   && $find != null )
        <div class="d-flex justify-content-between align-items-center block-bider" style="flex-direction: column ; ">
            <span style="opacity: 0.4">@livewire('decrematation', ['getart' => $find->enchere_id])</span>
            <span class="num-clic text-center mb-3"><strong>{{$pivot->valeur??'0'}}X</strong></span>
            <button class="btn btn-bid w-100 py-4 text-white" wire:click.prevent="update()" style="background: #ee8734;opacity: 0.4;" >
                Bider
            </button>
        </div>
    @endif
</div>
