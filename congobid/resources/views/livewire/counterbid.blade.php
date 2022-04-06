<div>

    @if (Auth::user())
        <div class="row g-3 g-lg-5">
            <div class="col-8">
                <div class="card card-participant">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Pseudo</th>
                                <th>Options</th>
                                <th>Nbr. click</th>
                                </tr>
                            </thead>
                                <tbody>

                                    @foreach ($listes as $liste)
                                    {{--lister les bideurs de l'enchere  --}}

                                            <tr>
                                             <td>{{$loop->index+1 }}</td>
                                            <td><a href="" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $liste->user->id }}">{{$liste->user->nom ??''}}</a></td>
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

                                        <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $liste->user->id  }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="icon">
                                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                        </div>
                                                        <div class="text-center">

                                                            @if (Auth::user())
                                                                {{-- @if (($articles->where('id', $article->id)->where('paquet_id', '==', Auth::user()->bideurs->first()->paquet_id)->first() == null) == 1) --}}
                                                                    <h5> Quel sentence voulez vous pour "{{ $liste->user->nom  }}" <br> il vous faudra {{$liste->enchere->paquet->prix}} bids</h5>
                                                                {{-- @endif --}}
                                                                <div class="block-power d-flex justify-content-center" >

{{-- wire:click.prevent()="sanction({{ $liste->user->id}},{{$liste->enchere->id}})" --}}
                                                                    <a href="{{route('sanction',['id'=>$liste->user->id,'enchere'=>$liste->enchere->id])}}"  class="me-5">
                                                                        <img src="{{asset('images/couronne.png')}}" alt="couronne" class="">
                                                                        <span>X3</span>
                                                                    </a>
                                                                    <a href="#" class="">
                                                                        <img src="{{asset('images/foudre.png')}}" alt="foudre">
                                                                        <span>X3</span>
                                                                    </a>



                                                                </div>
                                                            @else
                                                                <h5> Vous n'etes pas connecté ?</h5>
                                                                <a type="button" href="/login" class="btn btn-ok">Connexion</a>

                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer d-flex justify-content-between align-items-center">
                                                    <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button>
                                                    <a type="button" data-bs-dismiss="modal"  class="btn btn-ok">Annuler</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">

                {{-- @livewire('decrematation', ['munite' => $munite,'times' => $times,'getart'=>$getart]) --}}


                <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">
                    <span class="num-clic text-center mb-3"><strong>{{$counter??'0'}}X</strong></span>
                    <button class="btn w-100 btn-bid" wire:click.prevent="update()">
                        Bider
                    </button>
                </div>
                <div class="card-bid">
                    <h6>Solde (Bids): <span>{{$solde_bid}}</span></h6>
                    <h6>Bonus (Bids): <span>{{$solde_bonus->bonus}}</span></h6>
                    <h6>Non transferable (Bids): <span>{{$solde_non_tranferable}}</span></h6>
                </div>
                <div class="mt-3">

                    <label for="">Acheter des cliques</label>
                    <div class="input-group">
                        <input type="number" wire:model="addclick" class="form-control w-50" name="add-click">
                        <button wire:click.privent="addclick({{$addclick}})" class="form-control btn btn-primary w-25 btn-sm">OK</button>
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
                                <th>Options</th>
                                <th>Nbr. click</th>
                                </tr>
                            </thead>
                                <tbody>

                                    @foreach ($listes as $liste)
                                        {{--lister les bideurs de l'enchere  --}}

                                        <tr>
                                            <td>{{$loop->index+1 }}</td>
                                            <td><a href="" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $liste->user->id }}">{{$liste->user->nom ??''}}</a></td>
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
                    </div>
                </div>
            </div>

            <div class="modal-footer d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button>
                <a type="button" href="/detail-enchere/"  class="btn btn-ok">Annuler</a>
            </div>
        </div>
    </div>
    </div>
    <h5 class="mt-3 text-center">Options</h5>
    <div class="block-power d-flex justify-content-between align-items-center">
        <a data-bs-toggle="modal" data-bs-target="#modalliste">
            <img src="{{asset('images/couronne.png')}}" alt="couronne">
            <span>X3</span>
        </a>
        <a  data-bs-toggle="modal" data-bs-target="#modalliste">
            <img src="{{asset('images/foudre.png')}}" alt="foudre">
            <span>X3</span>
        </a>
        <a href="#">
            <img src="{{asset('images/click.png')}}" alt="click">
        </a>
        <a href="#">
            <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
            <span>X3</span>
        </a>
    </div>
</div>
