<div>
    @php
        $pivot =(App\Models\PivotBideurEnchere::where('enchere_id',$article)->where('user_id',Auth::user()->id)->first());
        $verify_sanction =(App\Models\Sanction::where('enchere_id',$article)->where('user_id',Auth::user()->id)->first());
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
                                <th>Optionsxb</th>
                                <th>Nbr. click </th>
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
            {{-- {{ $this }} --}}
            <div class="col-4">
                {{-- <div><span class="text-center d-block" id="time">03:00</span></div>--}}
                {{-- @livewire('decrematation', ['munite' => $munite,'times' => $times,'getart'=>$getart]) --}}

                    {{-- <div class="countdown">
                        <span id="clock" class="text-black"></span>
                    </div> <!-- end of countdown --> --}}

                @if ($pivot != null)
                    {{-- @if (date('d-m-Y ', strtotime($this->enchere->date_debut)) == now()->format('d-m-Y ') && date('H:i:s', strtotime($this->enchere->heure_debut)) <= now()->format('H:i:s')) --}}
                    @if (($pivot->enchere->state == 1) && ($pivot->where('user_id', Auth::user()->id)->first() != null && $verify_sanction->statut == 0))
                        <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">
                            <span class="num-clic text-center mb-3"><strong>{{$counter??'0'}}X</strong></span>
                            <button class="btn w-100 btn-bid" wire:click.prevent="update()" >
                                Bider
                            </button>
                        </div>
                    @else
                        <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">
                            <span class="num-clic text-center mb-3"><strong>{{$counter??'0'}}X</strong></span>
                            <button class="btn w-100 btn-bid" data-bs-toggle="modal" data-bs-target="">
                                Bider {{$pivot->enchere->state}}
                            </button>
                            <style>
                                .btn-bid{
                                    background: #a7a7a7!important;
                                }
                            </style>
                        </div>
                    @endif
                @else
                    <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">
                        <span class="num-clic text-center mb-3"><strong>{{$counter??'0'}}X</strong></span>
                        <button class="btn w-100 btn-bid" data-bs-toggle="modal" data-bs-target="#nonenchere">
                            Participer
                        </button>
                    </div>
                @endif

                <div class="card-bid">
                    <h6>Solde (Bids): <span>{{$solde_bid}}</span></h6>
                    <h6>Bonus (Bids): <span>{{$solde_bonus->bonus}}</span></h6>
                    <h6>Non transferable (Bids): <span>{{$solde_non_tranferable}}</span></h6>
                </div>
                <div class="mt-3">

                    <label for="">Acheter des cliques</label>
                    <div class="input-group">
                        <input type="number" wire:model="addclick" class="form-control w-50" name="add-click" >
                        @if ($pivot != null)
                            <button wire:click.privent="addclick({{$addclick}})" class="form-control btn btn-primary w-25 btn-sm">OK</button>
                        @else
                            <button data-bs-toggle="modal" data-bs-target="#nonenchere" class="form-control btn btn-primary w-25 btn-sm">OK</button>
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
        @if ( Auth::user())
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

                                            @foreach ($listes_sentance as $liste)
                                                {{--lister les bideurs de l'enchere  --}}
                                                <tr>
                                                    <td>{{$loop->index+1 }}</td>
                                                    <td><a href="" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#modalEnchere_{{ $liste->user->id }}">{{$liste->user->nom ??''}}</a></td>
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
    <h5 class="mt-3 text-center">Options </h5>
    @include('components.outils-detailenchere')

</div>
