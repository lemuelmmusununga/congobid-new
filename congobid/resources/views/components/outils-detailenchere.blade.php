
    @if ($sanction != null)
        <div wire:ignore.self class="modal fade" id="debloque_user_{{$sanction->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="icon">
                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                        </div>
                        @php
                            $prix_click = App\Models\Click_auto::where('paquet_id',$article_paquet)->first()->bid_prix ;
                        @endphp

                        <div class="text-center">
                            @if ($sanction->santance =="foudre" && Auth::user()->bideurs->first()->balance >= $foudre->bid_deblocage)
                                <h5> Vous pouvez vous débloquer en payant {{$foudre->bid_deblocage}} bids </h5>
                                @if (Auth::user()->bideurs->first()->balance >=$foudre->bid_deblocage)
                                    <a type="button" href="{{route('debloquer',['id'=>Auth::user()->id,'enchere'=>$pivot->enchere_id,'sanction'=>'foudre','name'=>Auth::user()->nom,'bid_cut'=>$foudre->bid_deblocage])}}" class="btn btn-ok w-50 ">Débloquer</a>
                                @else
                                    <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Débloquer</a>
                                @endif
                            @else
                                <h5> Vous pouvez vous débloquer en payant {{$roi->bid_deblocage}} bids </h5>
                                @if (Auth::user()->bideurs->first()->balance >=$roi->bid_deblocage)
                                <a type="button" href="{{route('debloquer',['id'=>Auth::user()->id,'enchere'=>$pivot->enchere_id,'sanction'=>'roi','name'=>Auth::user()->nom,'bid_cut'=>$roi->bid_deblocage])}}" class="btn btn-ok w-50 ">Débloquer</a>
                                @else
                                    <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Débloquer</a>
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (Auth::user() && Auth::user()->role_id == 5 && $pivot != null && $first_treve > $enchere->munite )


        <div class="block-power d-flex justify-content-between align-items-center">

            {{-- @if (($pivot->enchere->state == '1') && ($pivot->where('user_id', Auth::user()->id)->first() != null)) --}}


            @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->roi >=1 && $pivot != null && date('d-m-Y ', strtotime($this->enchere->date_debut)) == now()->format('d-m-Y ') && date('H:i:s ', strtotime($this->enchere->date_debut)) <= now()->format('H:i:s '))
                <a href=""data-bs-toggle="modal" data-bs-target="#roi_bloque">

                    <img src="{{asset('images/couronne.png')}}" alt="couronne">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->roi ?? 0}}</span>
                </a>


            @elseif (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->roi >=1 && $pivot != null && date('d-m-Y ', strtotime($this->enchere->date_debut)) >= now()->format('d-m-Y ') && date('H:i:s ', strtotime($this->enchere->date_debut)) <= now()->format('H:i:s '))

                <a href=""data-bs-toggle="modal" data-bs-target="#achat_roi">
                    <img src="{{asset('images/couronne.png')}}" alt="couronne">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->roi ?? 0}}</span>
                </a>
            @else
            <a href=""data-bs-toggle="modal" data-bs-target="#achat_roi">

                    <img src="{{asset('images/couronne.png')}}" alt="couronne">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->roi ?? 0}}</span>
                </a>
            @endif

            @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre >=1 && $pivot != null && date('d-m-Y ', strtotime($this->enchere->date_debut)) == now()->format('d-m-Y ') && date('H:i:s ', strtotime($this->enchere->date_debut)) <= now()->format('H:i:s '))
                <a href="" data-bs-toggle="modal" data-bs-target="#modalliste">
                    <img src="{{asset('images/foudre.png')}}" alt="foudre">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre ?? 0}}</span>
                </a>

                @elseif(Auth::user()->pivotbideurenchere != null && Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre <1 )
                <a href="" data-bs-toggle="modal" data-bs-target="#achat_foudre">
                    <img src="{{asset('images/foudre.png')}}" alt="foudre">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre ?? 0}}</span>
                </a>
            @else
                <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">

                    <img src="{{asset('images/foudre.png')}}" alt="foudre">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre ?? 0}}</span>
                </a>
            @endif

            {{-- @endif --}}
            @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->clicks >=1 && $pivot != null && date('d-m-Y ', strtotime($this->enchere->date_debut)) == now()->format('d-m-Y ') && date('H:i:s ', strtotime($this->enchere->date_debut)) <= now()->format('H:i:s '))
                <a href=""data-bs-toggle="modal"  data-bs-target="#achat_use_{{$article_enchere}}">
                    <img src="{{asset('images/click.png')}}" alt="click">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->clicks ?? 0}}</span>
                </a>
            @elseif(Auth::user()->pivotbideurenchere != null && Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->clicks <1 )
                <a href=""data-bs-toggle="modal" data-bs-target="#achat_click">
                    <img src="{{asset('images/click.png')}}" alt="click">
                    <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->clicks ?? 0}}</span>
                </a>
            @endif

            <a href="" data-bs-toggle="modal" data-bs-target="#achat_bouclier">
                <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->bouclier ?? 0}}</span>
            </a>
        </div>
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
                            @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && Auth::user()->bideurs->first()->balance >= $bouclier->bid_prix )
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
        {{-- noenchere--}}
        <div wire:ignore.self class="modal fade" id="nonenchr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="icon">
                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                        </div>
                        <div class="text-center">
                            @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && Auth::user() && $pivot == null)
                        <h5> Vous ne faite pas parti de cette enchere voulez vous participer en payant {{$paquet_enchere->prix}} bids ?</h5>
                        <a type="button" href="{{route('detail.article',['id'=>$article,'name'=>$article_titre])}}" class="btn btn-ok">Participer</a>

                        @else
                            <h5 class="text-danger"> L'enchere est fini!</h5>
                        @endif

                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- debloque user --}}
        {{-- click achat_use --}}

        {{-- modal --}}

        {{-- click achat_use --}}
        <div wire:ignore.self class="modal fade" id="achat_click" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="icon">
                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                        </div>
                        @php
                            $prix_click = App\Models\Click_auto::where('paquet_id',$article_paquet)->first()->bid_prix ;
                        @endphp

                        <div class="text-center">
                            <h5>Pour acheter il vous faut {{$prix_click}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                            @if ($pivot != null )
                                @if ( Auth::user()->bideurs->first()->balance >= $prix_click)
                                    <a type="button" href="{{route('click',['enchere'=>$article_enchere,'paquet'=>$prix_click,'name'=>Auth::user()->nom])}}" class="btn btn-ok w-50">Acheter</a>
                                @else
                                    <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Acheter</a>

                                @endif
                            @else
                                <a type="button" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" aria-label="close" data-bs-target="#modalEnchere_{{ $article->id }}" class="btn btn-ok w-50 ">Participer a l'enchere</a>
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
                            <h5>Pour acheter l'option roi , il vous faut {{$roi->bid_prix}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                            @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && Auth::user()->bideurs->first()->balance >= $roi->bid_prix )
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
                            <h5>Pour acheter , il vous faut {{$foudre->bid_prix}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                            @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && Auth::user()->bideurs->first()->balance >= $foudre->bid_prix )
                                <a type="button" href="{{route('foudre',['enchere'=>$pivot->enchere_id,'paquet'=>$foudre->bid_prix,'name'=>Auth::user()->nom])}}" class="btn btn-ok w-50 ">Acheter</a>
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
        {{-- modal --}}
         <div wire:ignore.self class="modal fade" id="roi_bloque" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="icon">
                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                        </div>
                        <div class="text-center">

                            @if (Auth::user() && $pivot != null && $enchere->munite*60+$enchere->seconde > 0 && Auth::user() && $pivot != null)
                            <h5> Vous allez bloquer l'enchere pandant {{$roi->temps_blocage}} munites</h5>
                                @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->roi>0)
                                    <a type="button" href="{{route('roi.block',['enchere'=>$pivot->enchere_id,'paquet'=>$pivot->enchere->paquet_id,'duree'=>$roi->temps_blocage,'achat'=>0])}}" class="btn btn-ok">Bloquer</a>

                                @else
                                    <a type="button" href="{{route('roi.block',['enchere'=>$pivot->enchere_id,'paquet'=>$pivot->enchere->paquet_id,'duree'=>$roi->temps_blocage,'achat'=>$roi->bid_prix])}}" class="btn btn-ok">Bloquer</a>
                                @endif
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-center align-items-center">
                    {{-- <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button> --}}
                    <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>

                </div>
            </div>
        </div>





        {{-- end --}}
    @else
        @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && Auth::user() && Auth::user()->role_id == 5)
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

    {{-- @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && $pivot != null) --}}
    {{-- @if (Auth::user() && $enchere->munite*60+$enchere->seconde > 0 && date('d-m-Y ', strtotime($this->enchere->date_debut)) == now()->format('d-m-Y ') && $pivot->where('user_id', Auth::user()->id)->first() != null && date('H:i:s', strtotime($this->enchere->heure_debut)) <= now()->format('H:i:s')) --}}

    {{-- @endif --}}





        {{-- <div wire:ignore.self class="modal fade" id="achat_roi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        </div> --}}
    {{-- @endif --}}
    @if ($first_treve < $enchere->munite)
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
                            <h5> Veillez pentientez c'est le moment de paix !</h5>
                        @endif

                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center align-items-center">
                {{-- <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button> --}}
                <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>

            </div>
        </div>
    </div>
    @else
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
    @endif
</div>
