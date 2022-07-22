<div>
    @php
        $enchere = App\Models\Enchere::where('date_debut',now()->format('Y-m-d'))->where('heure_debut','<=',now()->format('H:i'))->where('state',1)->first();

        if ($enchere != null) {
            # code...
            $pivot =(App\Models\PivotBideurEnchere::where('enchere_id',$enchere->id)->where('user_id',Auth::user()->id)->first());
            $sanction= App\Models\Sanction::where('enchere_id',$enchere->id)->where('user_id',Auth::user()->id)->where('statut',1)->where('deleted_at',null)->first();

        }
        // dd($enchere->id,$pivot->valeur,now()->format('d-m-Y'));
        // $verify_sanction =(App\Models\Sanction::where('enchere_id',$article)->where('user_id',Auth::user()->id)->first());
    @endphp
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @if (Auth::user() && $pivot != null )
        <div class="d-flex justify-content-between align-items-center block-bider" style="flex-direction: column ">
            <span class="num-clic text-center mb-3"><strong>{{$pivot->valeur??'0'}}X</strong></span>
            <button class="btn btn-bid" wire:click.prevent="update()" >
                Bider
            </button>
        </div>
    @endif
</div>
