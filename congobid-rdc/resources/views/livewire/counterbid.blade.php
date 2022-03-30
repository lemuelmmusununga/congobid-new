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
                                            <td>{{$liste->user->nom ??''}}</td>
                                            <td>
                                                <span>
                                                    <span class="iconify" data-icon="clarity:crown-solid"></span>
                                                </span>
                                                <span>
                                                    <span class="iconify" data-icon="pepicons:electricity"></span>
                                                </span>
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
            <div class="col-4">
                <div class="text-center">
                    <p>Temps <br>
                        <div wire:poll.1s>

                            <span> {{$munite}}:{{$times}} </span>
                        </div>
                    </p>
                </div>
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
    <h5 class="mt-3 text-center">Options</h5>
    @include('components.outils')
</div>
