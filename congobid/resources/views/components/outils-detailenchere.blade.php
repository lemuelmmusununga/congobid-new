
    @if (Auth::user() && Auth::user()->role_id == 5 && $pivot != null)
        <div class="block-power d-flex justify-content-between align-items-center">

            {{-- @if (($pivot->enchere->state == '1') && ($pivot->where('user_id', Auth::user()->id)->first() != null)) --}}


            @if (Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->roi >=1 && $pivot != null)
                <a href=""data-bs-toggle="modal" data-bs-target="#modalliste">
                    <img src="{{asset('images/couronne.png')}}" alt="couronne">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->roi ?? 0}}</span>
                </a>
            @elseif(Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->roi < 1 && $pivot != null)
                <a href=""data-bs-toggle="modal" data-bs-target="#achat_roi">
                    <img src="{{asset('images/couronne.png')}}" alt="couronne">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->roi ?? 0}}</span>
                </a>
            @else
                <a href=""data-bs-toggle="modal" data-bs-target="#nonenchere">
                    <img src="{{asset('images/couronne.png')}}" alt="couronne">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->roi ?? 0}}</span>
                </a>
            @endif

            @if (Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->foudre >=1 && $pivot != null)
                <a href="" data-bs-toggle="modal" data-bs-target="#modalliste">
                    <img src="{{asset('images/foudre.png')}}" alt="foudre">
                    <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->foudre ?? 0 }}</span>
                </a>

            @elseif(Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->foudre <1 && $pivot != null)
                <a href="" data-bs-toggle="modal" data-bs-target="#achat_foudre">
                    <img src="{{asset('images/foudre.png')}}" alt="foudre">
                    <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->foudre ?? 0 }}</span>
                </a>

            @else
                <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                    <img src="{{asset('images/foudre.png')}}" alt="foudre">
                    <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->foudre ?? 0 }}</span>
                </a>
            @endif
            {{-- @endif --}}
            <a href=""data-bs-toggle="modal" data-bs-target="#">
                <img src="{{asset('images/click.png')}}" alt="click">
                <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->clicks ?? 0 }}</span>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#achat_bouclier">
                <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->bouclier ?? 0 }}</span>
            </a>
        </div>
    @else
        @if (Auth::user() && Auth::user()->role_id == 5)
            <div class="block-power d-flex justify-content-between align-items-center">
                <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere"  >
                    <img src="{{asset('images/couronne.png')}}" alt="couronne">
                    <span>X 0</span>

                </a>
                <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                    <img src="{{asset('images/foudre.png')}}" alt="foudre">
                    <span>X 0</span>
                </a>
                <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                    <img src="{{asset('images/click.png')}}" alt="click">
                    <span>X 0</span>
                </a>
                <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                    <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                    <span>X 0</span>
                </a>
            </div>
        @else
            <div class="block-power d-flex justify-content-between align-items-center">
                <a href="/login" >
                    <img src="{{asset('images/couronne.png')}}" alt="couronne">
                    <span>X 0</span>

                </a>
                <a href="/login">
                    <img src="{{asset('images/foudre.png')}}" alt="foudre">
                    <span>X 0</span>
                </a>
                <a href="/login">
                    <img src="{{asset('images/click.png')}}" alt="click">
                    <span>X 0</span>
                </a>
                <a href="/login">
                    <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                    <span>X 0</span>
                </a>
            </div>
        @endif

    @endif

    @if ($pivot != null)
    {{-- achat bouclier --}}
    <div wire:ignore.self class="modal fade" id="achat_bouclier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        <h5>Pour acheter , il vous faut {{$bouclier->bid_prix}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                        @if (Auth::user()->bideurs->first()->balance >= $bouclier->bid_prix )
                            <a type="button" href="{{route('bouclier',['enchere'=>$pivot->enchere_id,'paquet'=>$bouclier->bid_prix,'name'=>Auth::user()->nom])}}" class="btn btn-ok w-50 ">Acheter</a>
                        @else
                            <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Acheter</a>
                        @endif
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    {{-- achat roi --}}
    <div wire:ignore.self class="modal fade" id="achat_roi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        <h5>Pour acheter , il vous faut {{$roi->bid_prix}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                        @if (Auth::user()->bideurs->first()->balance >= $roi->bid_prix )
                            <a type="button" href="{{route('roi',['enchere'=>$pivot->enchere_id,'paquet'=>$roi->bid_prix,'name'=>Auth::user()->nom])}}" class="btn btn-ok w-50 ">Acheter</a>
                        @else
                            <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Acheter</a>
                        @endif
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    {{-- achat foudre --}}
    <div wire:ignore.self class="modal fade" id="achat_foudre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        <h5>Pour acheter ,, il vous faut {{$foudre->bid_prix}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                        @if (Auth::user()->bideurs->first()->balance >= $roi->bid_prix )
                            <a type="button" href="{{route('foudre',['enchere'=>$pivot->enchere_id,'paquet'=>$roi->bid_prix,'name'=>Auth::user()->nom])}}" class="btn btn-ok w-50 ">Acheter</a>
                        @else
                            <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Acheter</a>
                        @endif
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $liste->user->id ?? '' }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">

                        @if (Auth::user() && $pivot != null )
                            @if (Auth::user()->id != $liste->user->id )

                                    <h5> Quel sentance Voulez-vous pour bloquer  "{{ $liste->user->nom ?? ''  }}" ? </h5>
                                    {{-- {{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>$roi-,'name'=>$liste->user->nom,'bid_cut'=>$roi->bid_prix>bid_prix])}} --}}
                                    <div class="block-power d-flex justify-content-center align-items-center">
                                        @if (Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->roi == 0)
                                            <a class="me-5" href="#" data-bs-toggle="modal" data-bs-dismiss="modal"  data-bs-target="#achat_roi">
                                                <img src="{{asset('images/couronne.png')}}" alt="couronne">
                                                <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->roi ?? 0}}</span>
                                            </a>
                                        @else
                                            <a class="me-5" href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>'roi','name'=>$liste->user->nom,'bid_cut'=>$roi->bid_prix])}}" >
                                                <img src="{{asset('images/couronne.png')}}" alt="couronne">
                                                <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->roi ?? 0}}</span>
                                            </a>
                                        @endif
                                        @if (Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->foudre == 0)
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#foudre">
                                                <img src="{{asset('images/foudre.png')}}" alt="foudre">
                                                <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->foudre ?? 0 }}</span>
                                            </a>
                                        @else
                                            <a href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>'foudre','name'=>$liste->user->nom,'bid_cut'=>$roi->bid_prix])}}">
                                                <img src="{{asset('images/foudre.png')}}" alt="foudre">
                                                <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$article)->first()->foudre ?? 0 }}</span>
                                            </a>
                                        @endif
                                    </div>
                                        {{-- <a type="button" class="btn btn-ok"  href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>$roi-,'name'=>$liste->user->nom,'bid_cut'=>$roi->bid_prix>bid_prix])}}" >Bloquer</a> --}}



                                    <a type="button" href={{route('clients.achat.bid')}} class="btn btn-ok" data-bs-dismiss="modal" aria-label="close"> Acheter les options</a>

                                {{-- @else
                                    <h5>  voulez vous bloquer "{{$liste->user->nom}}" <br> il vous faudra  bids  {{$roi->bid_prix}} </h5>
                                @endif --}}

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
                <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>

            </div>
        </div>
    </div>
    @endif
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
                            <h5> Veillez pentientez l'enchere n'a pas encore commencée !</h5>
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
