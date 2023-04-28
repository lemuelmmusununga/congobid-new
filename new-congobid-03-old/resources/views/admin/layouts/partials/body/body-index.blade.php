@php
    use App\Models\PivotBideurEnchere;
    $i=0;
@endphp

@foreach($users as $user)

@if(Cache::has('user-is-online-' . $user->id))
    @php
    $i = $i + 1 ;
    @endphp

@endif
@endforeach
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white fw-bold">Bienvenue sur votre <br> <span> Tableau de bord </span> </h2>
                {{-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> --}}
            </div>
            {{-- <div class="button ml-md-auto py-2 py-md-0"> --}}

                {{-- <a href="#" class="btn btn-secondary btn-round text-white">Ajouter un produit</a> --}}
            {{-- </div> --}}
        </div>
    </div>
</div>
<div class="page-inner py-2">

    <div class="row m-2 align-items-center flex-md-row">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <a href="#" class="btn btn-white btn-border btn-round mr-2"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ouvrir une enchère</a>
        </div>
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <a href="{{route('bids.index')}}" class="btn btn-white btn-border btn-round mr-2">Bids</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-6" >
            <div class="card card-passe full-height">
                <div class="card-body">
                    <canvas id="userChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6" >
            <div class="card card-article full-height">
                <div class="card-body">
                    <canvas id="articleChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6" >
            <div class="card card-article full-height">
                <div class="card-body">
                    <canvas id="paymentSystemsChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6" >
            <div class="card card-article full-height">
                <div class="card-body">
                    <canvas id="paymentCountryChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body ">
                    <div class="card-title fw-mediumbold">Demande des Bids</div>
                    <div class="card-list table-size  ">
                        @foreach ($demandes as $demande)
                            <div class="item-list ">
                                {{-- <div class="avatar">
                                    <img src="{{ asset('admins/img/jm_denis.jpg') }}" alt="..."
                                        class="avatar-img rounded-circle">
                                </div> --}}
                                <div class="info-user ml-3">
                                    <div class="username">{{ $demande->name  }}</div>
                                    <div class="status">{{ $demande->telephone }} | {{ $demande->payement }} | {{ $demande->nombre }}</div>
                                </div>
                                <div class="float-right pt-1 mx-3">
                                    <a href="">
                                        @if ($demande->state == 0)
                                            <a href="{{ route('envoie.bid',['numero'=>$demande->telephone , 'valeur'=>$demande->nombre]) }}">
                                                <i style="font-size: 24px;" class="bi bi-patch-check"></i>
                                            </a>
                                            <a class="text-danger  mx-3 " href="{{ route('delete.bid',['numero'=>$demande->telephone , 'valeur'=>$demande->nombre]) }}" style="font-size: 24px;">

                                                <i class="bi bi-trash3"></i>
                                            </a>
                                        @else
                                        <a href="{{ route('retrait.bid',['numero'=>$demande->telephone , 'valeur'=>$demande->nombre]) }}">
                                            <i style="font-size: 24px;" class="bi bi-patch-check-fill"></i>
                                        </a>
                                        <a class="text-danger mx-3" href="{{ route('delete.bid',['numero'=>$demande->telephone , 'valeur'=>$demande->nombre]) }}" style="font-size: 24px;">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                        @endif
                                    </a>

                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12">

                    <div class="card full-height">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Liste des gagnants</div>
                                {{-- <div class="card-tools">
                                    <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today"
                                                role="tab" aria-selected="true">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week"
                                                role="tab" aria-selected="false">Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month"
                                                role="tab" aria-selected="false">Month</a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-body table-size-seconde">
                            @foreach ($gagnants as $gagnant)

                                <div class="d-flex ">
                                    <div class="avatar avatar">


                                            <span class="avatar-title rounded-circle border border-white bg-info">
                                                <div class="avatar">
                                                    {{-- <img src="{{ asset('images/users/'.($gagnant->user->avatar == null ? 'default.png'  : $gagnant->user->avatar)) }}" alt="{{ $gagnant->user->nom }}" class="avatar-img rounded-circle mr-2"> --}}
                                                </div>
                                            </span>


                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h6 class="text-uppercase fw-bold mb-1">{{ $gagnant->user->nom ?? '' }} - {{ $gagnant->user->prenom ?? ''}} - {{ $gagnant->user->username ?? '' }}
                                            <span
                                                class="text-success p-3 rounded-3">{{ $gagnant->code ?? '' }}</span> </h6>
                                        <span class="text-muted">{{ $gagnant->enchere->article->titre  ?? ''}} du {{ date('d-m-Y',strtotime($gagnant->enchere->date_debut ?? '')) }} a {{ $gagnant->enchere->prix_enchere ?? '' }} $
                                           </span>
                                    </div>
                                    <div class="float-right pt-1 mx-3">
                                        <a href="" style="font-size: 24px;">
                                            @if ($gagnant->state == 0)
                                                <a style="font-size: 24px;" href="{{ route('paye.prix',['id'=>$gagnant->id]) }}">

                                                    <i class="bi bi-patch-check"></i>
                                                </a>
                                                <a class="text-danger  mx-3 " href="{{ route('delete.prix',['id'=>$gagnant->id]) }}" style="font-size: 24px;">

                                                    <i class="bi bi-trash3"></i>
                                                </a>
                                            @else
                                                <a style="font-size: 24px;" href="{{ route('paye.prix',['id'=>$gagnant->id]) }}">

                                                    <i class="bi bi-patch-check-fill"></i>
                                                </a>
                                                <a class="text-danger  mx-3 " href="{{ route('delete.prix',['id'=>$gagnant->id]) }}" style="font-size: 24px;">

                                                    <i class="bi bi-trash3"></i>
                                                </a>
                                            @endif
                                        </a>

                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                            @endforeach


                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                    <div class="card full-height">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Contact</div>
                                {{-- <div class="card-tools">
                                    <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today"
                                                role="tab" aria-selected="true">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week"
                                                role="tab" aria-selected="false">Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month"
                                                role="tab" aria-selected="false">Month</a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-body table-size-seconde">
                            @foreach ($contacts as $contact)
                                <div class="d-flex ">

                                    <div class="flex-1 ml-3 pt-1">
                                        <h6 class="text-uppercase fw-bold mb-1">{{ $contact->nom }} | {{ $contact->telephone }}</h6>
                                        <span class="text-muted">{{ $contact->content }}
                                           </span>
                                    </div>
                                    <div class="float-right pt-1 mx-3">
                                        <a class="text-danger" href="{{ route('delete.contact',['id'=>$contact->id]) }}" style="font-size: 24px;">

                                            <i class="bi bi-trash3"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="row">

                <div class="col-md-12">
                    <div class="card table-size-seconde">
                        <div class="card-body ">
                            {{-- <div class="card-title fw-mediumbold">Encheres encours...</div>
                                @foreach ($articles as $article)
                                    @php
                                        $enchere_encours = ($article->enchere->munite * 60 + $article->enchere->seconde >= 0 && $article->enchere->state == 0 &&
                                            date('d-m-Y', strtotime($article->enchere->date_debut)) == now()->format('d-m-Y') &&
                                            date('d-m-Y H:i',strtotime($article->enchere->date_debut)) <= now(' Africa/kinshasa')->format('d-m-Y H:i'));
                                    @endphp
                                    @if($enchere_encours )
                                        <div class="card-list ">
                                            <div class="item-list">
                                                <div class="avatar">
                                                    <img src="{{ asset('images/articles/' . ($article->images->first()->lien)) }}"
                                                        class="avatar-img rounded-circle">
                                                </div>
                                                <div class="info-user ml-3">
                                                    <div class="username">{{ $article->titre }}</div>
                                                    <div class="status fw-bold fs-4">Participants : <strong class="fs-4">{{count($article->enchere->pivotbideurenchere)  }}</strong> </div>
                                                    <div class="status">{{ $article->description }}</div>
                                                    <div class="status">{{ date('d-m-Y H:i',strtotime($article->enchere->date_debut)) }} | {{ $article->prix }} $</div>
                                                </div>
                                                {{-- <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                    <i class="fa fa-plus"></i>
                                                </button> --}}
                                            {{-- </div>
                                        </div>

                                    @endif
                                @endforeach
                            </div> --}}
                        {{-- </div>
                    </div>
                </div> --}}
                {{-- <div class="col-md-12">
                    <div class="card">
                        <div class="card-body ">
                            <div class="card-title fw-mediumbold">Encheres Futures</div>
                            <div class="card-list table-size-seconde">
                                @foreach ($articles as $article)
                                        @php
                                            $enchere_future = (($article->enchere->date_debut) > (now('Africa/Kinshasa')->format('Y-m-d H:i:s')));
                                        @endphp
                                        @if($enchere_future )
                                            <div class="card-list ">
                                                <div class="item-list">
                                                    <div class="avatar">
                                                        <img src="{{ asset('images/articles/' . ($article->images->first()->lien)) }}"
                                                            class="avatar-img rounded-circle">
                                                    </div>
                                                    <div class="info-user ml-3">
                                                        <div class="username">{{ $article->titre }}</div>
                                                        <div class="status fw-bold fs-4">Participants : <strong class="fs-4">{{count($article->enchere->pivotbideurenchere)  }}</strong> </div>

                                                        <div class="status">{{ $article->description }}</div>
                                                        <div class="status">{{ date('d-m-Y H:i',strtotime($article->enchere->date_debut)) }} | {{ $article->prix }} $</div>
                                                    </div>
                                                    {{-- <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                        <i class="fa fa-plus"></i>
                                                    </button> --}}
                                                {{-- </div>
                                            </div>

                                        @endif


                                    @endforeach --}}
                                    {{-- @if ($enchere_future == null)
                                        <h1 class="text-danger text-center fw-bold my-5">Pas d'enchère future</h1>
                                    @endif --}}
                            {{-- </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
        {{-- <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Statistiques annuelles</div>
                        <div class="card-tools">
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-pencil"></i>
                                </span>
                                Export
                            </a>
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                <span class="btn-label">
                                    <i class="fa fa-print"></i>
                                </span>
                                Print
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                        <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="userChartLegend"></div>
                </div>
            </div>
        </div> --}}

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                        <h4 class="card-title">Pays connectés</h4>
                        <div class="card-tools">
                            <button class="btn btn-icon btn-link btn-primary btn-xs"><span
                                    class="fa fa-angle-down"></span></button>
                            <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span
                                    class="fa fa-sync-alt"></span></button>
                            <button class="btn btn-icon btn-link btn-primary btn-xs"><span
                                    class="fa fa-times"></span></button>
                        </div>
                    </div>
                    <p class="card-category">
                        Liste de différents pays dont les utilisateurs sont connecté</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered" style="border-radius: 24px;">
            <div  class="modal-content rounded-pill" >
                <div class="modal-header">
                <span class="modal-title" id="staticBackdropLabel">Ajouter un article</span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                    @csrf
                                    <div class="">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="titre" class="form-control " id="smallInput"placeholder="Entrez le titre" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">

                                                        <input type="datetime-local" name="debut_enchere" class="form-control "
                                                            id="smallInput" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">

                                                        <input type="number" name="prix_marche" class="form-control "
                                                            id="smallInput" placeholder="Entrez son prix du marché" required>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">

                                                        <input type="number" name="credit_enchere_auto" class="form-control "
                                                            id="smallInput" placeholder="Entrez son crédit d'enchère automatique" value="0">
                                                    </div>
                                                </div> --}}

                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="number" name="prix" class="form-control " id="smallInput"
                                                            placeholder="Entrez son prix Congo Bid" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">

                                                        <select class="form-control " id="smallSelect" name="statut_id">

                                                            @foreach ($statuts as $statut)
                                                                <option value="{{ $statut->id }}">{{ $statut->libelle }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="marque" class="form-control " id="smallInput"
                                                            placeholder="Entrez la marque" required>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="number" name="cout_livraison" class="form-control "
                                                            id="smallInput" placeholder="Entrez son coût de livraison" value="0">
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="number" name="prix" class="form-control " id="smallInput"
                                                            placeholder="Entrez la quantité" required>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="number" name="limite_enchere_auto" class="form-control "
                                                            id="smallInput" placeholder="Entrez sa limite d'enchère automatique" value="0">
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">

                                                        <input type="time" name="fin_enchere" class="form-control "
                                                            id="smallInput" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="quantite" class="form-control "
                                                            id="smallInput" placeholder="Entrez la quantité" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">

                                                    <div class="form-group">

                                                        <select class="form-control " id="smallSelect" name="categorie_id">
                                                            @foreach ($categories as $categorie)
                                                                <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">

                                                        <input type="text" name="meta_keywords" class="form-control "
                                                            id="smallInput" placeholder="Entrez les clés pour les metas données" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">

                                                        <input type="file" name="image" class="form-control" multiple id="exampleFormControlFile1" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">

                                                        <textarea class="form-control" name="description" id="comment" rows="5"
                                                            required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group mx-2 float-right">
                                                        <input class="form-check-input" type="checkbox" name="promouvoir" id="flexCheckDefault">
                                                    Promouvoir cet article ?
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group mx-2 float-right">
                                                        <input class="form-check-input" type="checkbox" name="state" id="flexCheckDefault">
                                                    Ajouter au salon ?
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal" style="border-radius: 16px;">Ferme</button>
                    <button type="submit" class="btn btn-primary " style="border-radius: 16px;">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            var ctx = document.getElementById('userChart').getContext('2d');
            var ctx1 = document.getElementById('paymentSystemsChart').getContext('2d');
            var ctx3 = document.getElementById('paymentCountryChart').getContext('2d');
            var ctx2 = document.getElementById('articleChart').getContext('2d');
            var userChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Utilisateurs {{count($users)}}  ', 'Connecté {{$i}}', 'Inactifs {{count($users) - $i}}'],
                    datasets: [{
                        label: 'Nombre d\'utilisateurs',
                        data: [{{ count($users) }}, {{ $i }}, {{ count($users) - $i }}],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.4)',
                            'rgba(54, 255, 235, 0.4)',
                            'rgba(255, 206, 86, 0.4)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 255, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                        labels: {
                            fontColor: '#333',
                            fontSize: 14,
                            boxWidth: 20,
                            padding: 20
                        }
                    },
                    title: {
                        display: true,
                        text: 'Répartition des utilisateurs',
                        fontColor: '#333',
                        fontSize: 18,
                        padding: 20
                    }
                }
            });
            var paymentSystemsChart = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: ['M-pesa', 'Airtel money', 'Orange Money'],
                    datasets: [{
                        label: 'Nombre d\'utilisateurs',
                        data: [500, 700, 300],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.4)',
                            'rgba(54, 255, 235, 0.4)',
                            'rgba(255, 206, 86, 0.4)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 255, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'Répartition des systèmes de paiement',
                        fontColor: '#333',
                        fontSize: 18,
                        padding: 20
                    }
                }
            });
            var paymentCountryChart = new Chart(ctx3, {
                type: 'bar',
                data: {
                    labels: ['M-pesa', 'Airtel money', 'Orange money'],
                    datasets: [{
                        label: 'RDC',
                        data: [500, 700, 300],
                        backgroundColor: 'rgba(255, 99, 132, 0.4)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Congo',
                        data: [200, 400, 100],
                        backgroundColor: 'rgba(54, 255, 235, 0.4)',
                        borderColor: 'rgba(54, 255, 235, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Cameroun',
                        data: [300, 500, 200],
                        backgroundColor: 'rgba(255, 206, 86, 0.4)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: true,
                        position: 'bottom'
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'Répartition des systèmes de paiement par pays',
                        fontColor: '#333',
                        fontSize: 18,
                        padding: 20
                    }
                }
            });
            var articleChart = new Chart(ctx2, {
                type: 'doughnut', // Type de charte (bar, line, pie, etc.)
                data: {
                labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin'],
                datasets: [{
                    label: 'Ventes mensuelles',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(255, 206, 86, 0.4)',
                    'rgba(75, 192, 192, 0.4)',
                    'rgba(153, 102, 255, 0.4)',
                    'rgba(255, 159, 64, 0.4)'
                    ],
                    borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 255, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
                },
                options: {
                scales: {
                    yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                    }]
                }
                }
            });
        };
    </script>
</div>
