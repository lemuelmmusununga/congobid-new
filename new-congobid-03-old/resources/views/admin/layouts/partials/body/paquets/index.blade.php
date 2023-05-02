@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste de catégorie</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('paquets.create') }}" class="btn btn-white btn-border btn-round mr-2">Ajouter une catégorie</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing -->
    <div class="container">

        <div class="row justify-content-center align-items-center my-5">
            @foreach ($paquets as $key => $paquet)

                    <div class="col-md-4 pl-md-0">
                        <div class="card card-pricing" style="border-radius: 24px;">
                            <div class="card-header">
                                <h4 class="card-title">{{ $paquet->libelle }}</h4>
                                <div class="card-price">
                                    <span class="price">{{ $paquet->prix }}</span>
                                    <span class="text">bids</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="specification-list">
                                    <li>
                                        <span class="name-specification">Nombre d'enchère</span>
                                        <span class="status-specification">{{ $paquet->nombre_enchere }}</span>
                                    </li>
                                    <li>
                                        <span class="name-specification">Nombre de membres</span>
                                        <span class="status-specification">{{ $paquet->bideurs == null ? 0 : $paquet->bideurs->count() }}</span>
                                    </li>
                                    <li>
                                        <span class="name-specification">Durée</span>
                                        <span class="status-specification">{{ $paquet->duree }}'</span>
                                    </li>
                                    <li>
                                        <span class="name-specification">Intervale</span>
                                        <span class="status-specification">{{ $paquet->min }}$ - {{ $paquet->max }}$</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('paquets.edit', [$paquet->id]) }}" class="btn btn-primary btn-block" style="border-radius: 24px;">Editer</a>
                                @if ($paquet->statut->id == 1)
                                    <a href="{{ route('paquets.destroy', [$paquet->id, 1]) }}" class="btn btn-success btn-block" style="border-radius: 24px;">Activer</a>
                                @elseif ($paquet->statut->id == 2)
                                    <a href="{{ route('paquets.destroy', [$paquet->id, 2]) }}" class="btn btn-warning btn-block" style="border-radius: 24px;">Réactiver</a>
                                @elseif ($paquet->statut->id == 3)
                                    <a href="{{ route('paquets.destroy', [$paquet->id, 3]) }}" class="btn btn-danger btn-block" style="border-radius: 24px;">Supprimer</a>
                                @endif
                            </div>
                        </div>
                    </div>
                {{-- @else
                    <div class="col-md-3 pl-md-0 pr-md-0">
                        <div class="card card-pricing card-pricing-focus card-primary">
                            <div class="card-header">
                                <h4 class="card-title">{{ $paquet->libelle }}</h4>
                                <div class="card-price">
                                    <span class="price">{{ $paquet->prix }}</span>
                                    <span class="text">bids</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="specification-list">
                                    <li>
                                        <span class="name-specification">Nombre d'enchère</span>
                                        <span class="status-specification">{{ $paquet->nombre_enchere }}</span>
                                    </li>
                                    <li>
                                        <span class="name-specification">Nombre de membres</span>
                                        <span class="status-specification">{{ $paquet->bideurs == null ? 0 : $paquet->bideurs->count() }}</span>
                                    </li>
                                    <li>
                                        <span class="name-specification">Durée</span>
                                        <span class="status-specification">{{ $paquet->duree }}'</span>
                                    </li>
                                    <li>
                                        <span class="name-specification">Intervale</span>
                                        <span class="status-specification">{{ $paquet->min }}$ - {{ $paquet->max == null ? 'plus' : $paquet->max.'$' }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('paquets.edit', [$paquet->id]) }}" class="btn btn-light btn-block">Editer</a>
                                @if ($paquet->statut->id == 1)
                                    <a href="{{ route('paquets.destroy', [$paquet->id, 1]) }}" class="btn btn-success btn-block">Activer</a>
                                @elseif ($paquet->statut->id == 2)
                                    <a href="{{ route('paquets.destroy', [$paquet->id, 2]) }}" class="btn btn-success btn-block">Réactiver</a>
                                @elseif ($paquet->statut->id == 3)
                                    <a href="{{ route('paquets.destroy', [$paquet->id, 3]) }}" class="btn btn-danger btn-block">Supprimer</a>
                                @endif
                            </div>
                        </div>
                    </div> --}}
                {{-- @endif --}}
            @endforeach
        </div>
    </div>

@endsection
