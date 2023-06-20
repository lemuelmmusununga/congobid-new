<div wire:poll.keeplive >
    @php
        $pivot =(App\Models\PivotBideurEnchere::where('enchere_id',$article)->where('user_id',Auth::user()->id)->first());
        $verify_sanction =(App\Models\Sanction::where('enchere_id',$article)->where('user_id',Auth::user()->id)->first());
        $sanction= App\Models\Sanction::where('enchere_id',$article)->where('user_id',Auth::user()->id)->where('statut',1)->where('deleted_at',null)->first();
         // treve
        // $enchere= App\Models\Enchere::where('id',$article)->first();

        // dump($first_treve , $enchere->munite ,$second_treve,$tree_treve);
    @endphp

    {{-- <div wire:poll.keeplive>

        <span>{{$temps_restant_total-1}}</span>
    </div> --}}
    @if (Auth::user() )
        <div class="row g-3 g-lg-5">
            <div class="col-8">
                <div class="card card-participant">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Pseudo</th>

                                <th>Nbr. click </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listes as $liste)
                                {{--lister les bideurs de l'enchere  --}}
                                    <tr>
                                        <td>{{$loop->index+1 }}</td>
                                        <td>
                                            @if($sanction == null && $pivot != null && $enchere->munite*60+$enchere->seconde > 0 && $first_treve > $enchere->munite || $second_treve ==  $enchere->munite || $tree_treve ==  $enchere->munite && date('d: m :Y ', strtotime($this->enchere->date_debut)) == now('africa/kinshasa')->format('d: m :Y ') && $pivot->where('enchere_id',$enchere->id)->where('user_id', Auth::user()->id)->first() != null && date('H:i', strtotime($this->enchere->dat_debut)) <= now(' Africa/kinshasa')->format('H:i')  )
                                                <a href="" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $liste->user->id ?? '' }}">{{$liste->user->username ??''}}</a>
                                            @else
                                                <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere"> {{$liste->user->username ??''}}</a>
                                            @endif
                                        </td>

                                        {{-- modal santance --}}
                                            <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $liste->user->id ?? '' }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="icon">
                                                                <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                            </div>
                                                            <div class="text-center">
                                                                @if (Auth::user() && $pivot != null )
                                                                    @if (Auth::user()->id != $liste->user->id)
                                                                            <h5>  Voulez-vous foudroyer  "{{ $liste->user->username ?? ''  }}" ? </h5>
                                                                            {{-- {{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>$roi-,'name'=>$liste->user->nom,'bid_cut'=>$roi->bid_prix>bid_prix])}} --}}
                                                                            <div class="block-power d-flex justify-content-center align-items-center">
                                                                                @if (Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre < 1)
                                                                                    <a href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>'foudre','name'=>$liste->user->nom,'bid_cut'=>$roi->bid_prix])}}">
                                                                                        <img src="{{asset('images/foudre.png')}}" alt="foudre">
                                                                                        <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre ?? 0}} </span>
                                                                                    </a>
                                                                                @elseif (Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre  >= 1)
                                                                                    <a href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>'foudre','name'=>$liste->user->nom,'bid_cut'=>0])}}">
                                                                                        <img src="{{asset('images/foudre.png')}}" alt="foudre">
                                                                                        <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre  ?? 0}}</span>
                                                                                    </a>
                                                                                @endif
                                                                            </div>
                                                                                {{-- <a type="button" class="btn btn-ok"  href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>$roi-,'name'=>$liste->user->nom,'bid_cut'=>$roi->bid_prix>bid_prix])}}" >Bloquer</a> --}}
                                                                            {{-- <a type="button" href={{route('clients.achat.bid')}} class="btn btn-ok" data-bs-dismiss="modal" aria-label="close"> Acheter les options</a> --}}

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
                                                        @if($pivot)
                                                            <div class="modal-footer d-flex justify-content-between align-items-center">
                                                                <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                                                                @if (  Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre < 1)
                                                                    <a href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>'foudre','name'=>$liste->user->nom,'bid_cut'=>$roi->bid_prix])}}">
                                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Foudroyer</button>
                                                                    </a>
                                                                @elseif (Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre  >= 1)
                                                                    <a href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>'foudre','name'=>$liste->user->nom,'bid_cut'=>0])}}">
                                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Foudroyer</button>
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        @endif
                                                </div>
                                            </div>
                                        {{-- end modal --}}
                                            {{-- <span>
                                                <span class="iconify" data-icon="clarity:crown-solid"></span>
                                            </span>
                                            <span>
                                                <span class="iconify" data-icon="pepicons:electricity"></span>
                                            </span> --}}

                                        <td>
                                            <span class="badge bg-primary">{{$liste->valeur ??''}}</span>
                                        </td>
                                    </tr>
                                    @if ($enchere->minute*60+$enchere->seconde > 0)

                                        {{-- end modal santance --}}
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="chat-block mt-3" style="height: 20vh; min-height: 20vh;overflow-y:auto;background: none;">
                    <div class="container-fluid">
                        <div class="chatbox">
                        <div class="w-100">
                            <div class="block-content-chat w-100">
                                @foreach ($messages as $message)
                                    @if ($message->created_at->format('d-m-Y')  >= Auth::user()->created_at->format('d-m-Y') )

                                        @if (Auth::user()&& $message->user_id == Auth::user()->id )
                                            <div class="msg-row msg-row2 w-100">
                                                <div class="msg-text">
                                                    <h3 class="name-user">{{$message->user->username ?? ''}}</h3>
                                                    <p>{{$message->libelle}}</p>
                                                    <div class="date text-end">
                                                        <span>
                                                            {{$message->created_at->diffForHumans() ?? ''}}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="avatar-block">
                                                    <div class="avatar">
                                                        <img src="{{asset('images/users/' . (Auth::user()->avatar ? Auth::user()->avatar : 'default.png' ) )}} " alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        @else

                                            <div class="msg-row">
                                                <div class="avatar-block">
                                                    <div class="avatar">
                                                        <img src="{{asset('images/users/' . ($message->user->avatar ? $message->user->avatar : 'default.png' ) ) }} " alt="">
                                                    </div>
                                                </div>
                                                <div class="msg-text">
                                                    <h3 class="name-user">{{$message->user->username ?? ''}}</h3>
                                                    <p>{{$message->libelle}}</p>
                                                    <div class="date text-end">
                                                    <span>
                                                        {{$message->created_at->diffForHumans() ?? ''}}
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif

                                    @endif
                                @endforeach

                                @livewire('btnbidchat')
                            </div>

                        </div>
                    </div>
                    </div>
                    <div class="nav-chat" style="position:sticky;">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-10" class="message">
                                    <textarea name="message" wire:model="message" id="text" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="col-2 d-flex justify-content-end ps-0">
                                    @if (Auth::user())
                                        <button class="btn" wire:click.prevent="send()" id="send">
                                            <span class="iconify" data-icon="fluent:send-16-regular"></span>
                                        </button>
                                    @else
                                        <a class="btn" href="/login">
                                            <span class="iconify" data-icon="fluent:send-16-regular"></span>
                                        </a>
                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- {{ $this }} --}}
            <div class="col-4">
                {{-- <div><span class="text-center d-block" id="time">03:00</span></div>--}}


                @if ($pivot != null)
                    @if ($enchere->munite*60+$enchere->seconde>0  && date('d: m :Y ', strtotime($this->enchere->date_debut)) == now('africa/kinshasa')->format('d: m :Y ') && $pivot->where('enchere_id',$enchere->id)->where('user_id', Auth::user()->id)->first() != null && date('H:i', strtotime($this->enchere->date_debut)) <= now(' Africa/kinshasa')->format('H:i'))
                    @livewire('counterdown', ['getart' => $enchere?->id] )
                        <div class="text-center">
                            <hr>
                                <h6>Prix de l'enchere </h6>

                                <h5 class="fw-bold text-success"> $ {{Str::substr($prix_final,0,6)}} </h5>
                            <hr>
                        </div>
                        @if ($sanction == null)
                            <div class="d-flex justify-content-between align-items-center" x-data= "{ counter : {{ $counter }} } " style="flex-direction: column">
                                {{-- <span class="num-clic text-center mb-3"><strong x-text>{{$counter??'0'}}X</strong></span> --}}
                                <div class="d-inline">
                                    <h4 class="num-clic text-center mb-3" x-text="counter"></h4>
                                </div>
                                <h1 class="d-none" wire:model="counter" x-text="counter"></h1>

                                <button class="btn w-100 btn-bid" @click="counter++" wire:click.prevent="update()">
                                    Bider
                                </button>
                            </div>
                        @else
                            <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">
                                <span class="num-clic text-center mb-3"><strong>{{$counter??'0'}}X</strong></span>
                                <button class="btn w-100 btn-bid" data-bs-toggle="modal" data-bs-target="#debloque_user_{{$sanction->id}}">
                                    Vous avez été bloqué par {{ '@ '. $sanction->sanction->username }}
                                </button>
                                <style>
                                    .btn-bid{
                                        background: #c70303!important;
                                    }
                                </style>
                            </div>
                        @endif
                    @elseif ($enchere->munite*60+$enchere->seconde == 0  && date('d: m :Y ', strtotime($this->enchere->date_debut)) == now('africa/kinshasa')->format('d: m :Y ') && $pivot->where('enchere_id',$enchere->id)->where('user_id', Auth::user()->id)->first() != null && date('H:i', strtotime($this->enchere->dat_debut)) < now(' Africa/kinshasa')->format('H:i'))

                        {{-- <span class="d-block text-center">Date du débudvt</span> --}}
                        <h5 class="fw-bold d-block text-center text-danger">Enchére terminé !</h5>
                        @livewire('counterdown', ['getart' => $enchere?->id] )
                            <div class="text-center">
                                <hr>
                                    <h6>Prix de l'enchere</h6>

                                    <h5 class="fw-bold text-success"> $ {{Str::substr($prix_final,0,7)}} </h5>
                                <hr>
                            </div>
                        <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">
                            <span class="num-clic text-center mb-3"><strong>{{$counter??'0'}}X</strong></span>
                            <button class="btn w-100 btn-bid" data-bs-toggle="modal" data-bs-target="">
                                Bider
                            </button>
                            <style>
                                .btn-bid{
                                    background: #a7a7a7!important;
                                }
                            </style>
                        </div>
                    @else
                    <span class="d-block text-center">Date du début</span>
                        <h5 class="fw-bold d-block text-center">{{ date('d: m :Y',strtotime($enchere->date_debut)) }} à  {{ date('H : i ',strtotime($enchere->dat_debut)) }}</h5>

                        <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">
                            <span class="num-clic text-center mb-3"><strong>{{$counter??'0'}}X</strong></span>
                            <button class="btn w-100 btn-bid" data-bs-toggle="modal" data-bs-target="">
                                Bider
                            </button>
                            <style>
                                .btn-bid{
                                    background: #a7a7a7!important;
                                }
                            </style>
                        </div>
                    @endif
                @else
                    @if ($enchere->munite*60+$enchere->seconde < 1)
                        <span class="fw-bold text-danger">Enchére terminé !</span>
                    @endif

                    <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">
                        <span class="num-clic text-center mb-3"><strong>{{$counter??'0'}}X</strong></span>
                        <button class="btn w-100 btn-bid" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article }}">
                            Participer
                        </button>
                    </div>
                @endif


                <div class="mt-3">


                    @if($enchere->munite*60+$enchere->seconde>0  &&   date('d: m :Y ', strtotime($this->enchere->date_debut)) == now('africa/kinshasa')->format('d: m :Y ')  && date('d: m :Y H:i', strtotime($this->enchere->dat_debut)) <= now(' Africa/kinshasa')->format('d: m :Y H:i'))
                        @include('components.outils-detailenchere')
                    @else
                        @include('components.outils-detailenchere-future')
                    @endif


                </div>
                <div class="card-bid my-3">
                    <h6>Prix CongoBid: <span>{{$prix}}</span></h6>
                    <h6>Solde (Bids): <span>{{$solde_bid}}</span></h6>
                    <h6>Bonus (Bids): <span>{{$solde_bonus->bonus}}</span></h6>
                    <h6>Non transferable (Bids): <span>{{$solde_non_tranferable}}</span></h6>
                </div>
                <div class="col-md-12 d-block">
                    <label for="click">Acheter des cliques</label>
                    <div class="input-group">

                        <select name="click" id="" wire:model="click_achat" class=" form-control w-50">
                            <option value="" disabled>Selectionner</option>
                            @foreach ($clicks as $click)
                                <option value="{{$click->id}}" >{{$click->benefice}}</option>
                                {{-- noenchere--}}
                            @endforeach

                        </select>
                        <div wire:ignore.self class="modal fade" id="achat_cliks" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        <div class="text-center">
                                            @if ($click_paye )
                                                <h5> il faudrait payé  {{$click_paye->prix_bid}} bids ?</h5>
                                                @if ($sanction == null && Auth::user()->bideurs->first()->balance >=$click_paye->prix_bid)
                                                    <a type="button" href="{{route('achat.click',['id'=>$click_paye->id,'name'=>Auth::user()->nom,'enchere_id'=>$enchere->id])}}" class="btn btn-ok">Acheter</a>

                                                @else
                                                    <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok">Acheter</a>

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
                        {{-- <input id="click" type="number" wire:model="addclick" class="form-control w-50" name="add-click" > --}}
                        @if ($pivot != null && $enchere->munite*60+$enchere->seconde > 0 )
                            <button data-bs-toggle="modal" data-bs-target="#achat_cliks" wire:click.privent="addclick({{$addclick ? $addclick  : 0}})" class="form-control btn btn-primary w-25 btn-sm">OK</button>
                        @else
                            <button data-bs-toggle="modal" data-bs-target="#nonenchr" class="form-control btn btn-primary w-25 btn-sm">OK</button>
                        @endif

                    </div>
                </div>
            </div>

        </div>
        @else
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{route('login')}}" class="btn w-100">
                    Bider
                </a>
            </div>
        @endif
        @if ($pivot != null &&  Auth::user())
            <div wire:ignore.self class="modal fade" id="modalliste" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="icon">
                                <span class="iconify" data-icon="ant-design:info-outlined"></span>
                            </div>
                            <div class="text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Pseudo</th>
                                        <th></th>
                                        <th>Nbr. click</th>
                                        </tr>
                                    </thead>
                                        <tbody>

                                            @foreach ($listes_sentance as $liste)
                                                {{--lister les bideurs de l'enchere  --}}
                                                <tr>
                                                    <td>{{$loop->index+1 }}</td>
                                                    {{-- <td><a href="" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#modalEnchere_{{ $liste->user->id }}">{{$liste->user->nom ??''}}</a></td> --}}
                                                    @if (Auth::user()->pivotbideurenchere->where('enchere_id',$liste->enchere->id)->first()->foudre  == 0)
                                                            <td><a href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>'foudre','name'=>$liste->user->nom,'bid_cut'=>$foudre->bid_prix])}}">
                                                        {{$liste->user->nom ??''}}</a></td>
                                                    @elseif (Auth::user()->pivotbideurenchere->where('enchere_id',$liste->enchere->id)->first()->foudre  >= 1)
                                                        <td><a href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$pivot->enchere_id,'sanction'=>'foudre','name'=>$liste->user->nom,'bid_cut'=>0])}}">
                                                        {{$liste->user->nom ??''}}</a></td>
                                                    @endif
                                                    <td>
                                                        {{-- <span>
                                                            <span class="iconify" data-icon="clarity:crown-solid"></span>
                                                        </span>
                                                        <span>
                                                            <span class="iconify" data-icon="pepicons:electricity"></span>
                                                        </span> --}}
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary">{{$liste->valeur ??''}}</span>

                                                    </td>
                                                </tr>

                                            @endforeach
                                        </tbody>

                                </table>
                                <button type="button" class="btn btn-ok" data-bs-dismiss="modal">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    {{-- <h5 class="mt-3 text-center">Options </h5> --}}

    <div class="row justify-content-end d-block">


    </div>
    {{-- click achat_use --}}
    <div wire:ignore.self class="modal fade" id="achat_use_{{$article_enchere}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <h5> Voulez-vous utiliser la mode du clique automatique ?</h5>
                        @if (Auth::user() && $pivot != null )
                            @if ($enchere->munite*60+$enchere->seconde > 0)
                                <a type="button"  href="{{route('bid.auto',['name'=>Auth::user()->nom])}}"  class="btn btn-ok w-50">Oui</a>
                            @else
                                <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Oui</a>
                            @endif
                        @else
                            @if (Auth::user())
                            <a type="button" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" aria-label="close" data-bs-target="#modalEnchere_{{ $article }}" class="btn btn-ok w-50 ">Participer a l'enchere</a>
                            @else
                            <a type="button" href="/login" data-bs-dismiss="modal"  aria-label="close"  class="btn btn-ok w-50 ">Participer a l'enchere</a>

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
      {{--  modal participer --}}
        <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $article }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="icon">
                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                        </div>
                        <div class="text-center">

                            <h5>Voulez-vous participer à cette enchère ?</h5>
                            {{-- @if (Auth::user()) --}}
                                <p> Pour y participer, veuillez souscrire à la catégorie "{{$enchere->paquet?->libelle}}" en
                                    payent {{$enchere->paquet?->prix}} bids.</p>
                            {{-- @endif --}}
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                        @if (Auth::user())
                        <a type="button" href="{{route('detail.article',['id'=>$article,'name'=>$article_titre])}}" class="btn btn-ok">Participer</a>

                        @else
                            <a type="button" href="/login" class="btn btn-ok">Participer</a>

                        @endif
                    </div>
                </div>
            </div>
        </div>

</div>

