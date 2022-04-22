@if (Auth::user() && Auth::user()->role_id == 5)
        <div class="block-power d-flex justify-content-between align-items-center">
            <a href=""data-bs-toggle="modal" data-bs-target="#modalliste">
                <img src="{{asset('images/couronne.png')}}" alt="couronne">
                <span>X{{Auth::user()->pivotbideurenchere->first()->roi ?? 0}}</span>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#modalliste">
                <img src="{{asset('images/foudre.png')}}" alt="foudre">
                <span>X{{ Auth::user()->pivotbideurenchere->first()->foudre ?? 0 }}</span>
            </a>
            <a href=""data-bs-toggle="modal" data-bs-target="#modalachat">
                <img src="{{asset('images/click.png')}}" alt="click">
                <span>X{{ Auth::user()->pivotbideurenchere->first()->clicks ?? 0 }}</span>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#modalliste">
                <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                <span>X{{ Auth::user()->pivotbideurenchere->first()->bouclier ?? 0 }}</span>
            </a>
        </div>


    @else
        <div class="block-power d-flex justify-content-between align-items-center">
            <a href="/login">
                <img src="{{asset('images/couronne.png')}}" alt="couronne">
            </a>
            <a href="/login">
                <img src="{{asset('images/foudre.png')}}" alt="foudre">
            </a>
            <a href="/login">
                <img src="{{asset('images/click.png')}}" alt="click">
            </a>
            <a href="/login">
                <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
            </a>
        </div>
@endif
<div wire:ignore.self class="modal fade" id="modalEnchere_{{ $liste->user->id ?? '' }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">

                        @if (Auth::user() && $pivot != null)
                            @if (Auth::user()->id != $liste->user->id )
                                @if (Auth::user()->pivotbideurenchere->first()->roi == 0)
                                    <h5> Pour bloquer  "{{ $liste->user->nom  }}" <br> il vous faut {{$roi->bid_prix}} bids Pour acheter l'options</h5>
                                    <button type="button" class="btn btn-ok" data-bs-dismiss="modal" wire:click.prevent()="option({{$roi->bid_prix}})"> Acheter</button>
                                @else
                                    <h5>  voulez vous bloquer "{{$liste->user->nom}}" <br> il vous faudra  bids  {{$roi->bid_prix}} </h5>
                                @endif

                            @endif

                            <div class="block-power d-flex justify-content-center" >

                                {{-- wire:click.prevent()="sanction({{ $liste->user->id}},{{$liste->enchere->id}})" --}}

                            </div>
                        @else
                        <h5> Vous ne faite pas parti de cette enchere voulez vous participer ?</h5>
                        <a type="button" href="{{route('detail.article',['id'=>$article,'name'=>$article_titre])}}" class="btn btn-ok">Participer</a>

                        @endif
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center align-items-center">
                {{-- <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button> --}}
                <button type="button" class="btn btn-non" data-bs-dismiss="modal">Annuler</button>

            </div>
        </div>
    </div>
</div>


<div wire:ignore.self class="modal fade" id="nonenchere" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="icon">
                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                </div>
                <div class="text-center">

                    @if (Auth::user() && $pivot == null)
                        <h5> Vous ne faite pas parti de cette enchere voulez vous participer en payant {{$paquet_enchere->prix}} bids ?</h5>
                        <a type="button" href="{{route('detail.article',['id'=>$article,'name'=>$article_titre])}}" class="btn btn-ok">Participer</a>
                    @else
                        <h5> Veillez pentientez</h5>
                    @endif
                </div>
            </div>

            <div class="modal-footer d-flex justify-content-center align-items-center">
            {{-- <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button> --}}
            <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>

        </div>
    </div>
</div>


</div>
