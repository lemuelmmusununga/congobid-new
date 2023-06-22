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

                {{-- <a href="#" class="btn btn-sm btn-secondary btn-round text-white">Ajouter un produit</a> --}}
            {{-- </div> --}}
        </div>
    </div>
</div>
<div class="page-inner py-2">

    {{-- <div class="row g-3 g-lg-4">
        <a href="{{route('encheres.index')}}" class="col-lg-3 btn btn-lg btn-success py-4 " style="font-size:24px;">ENCHERES</a>
        <a href="{{route('bids.index')}}" class="col-lg-4 btn btn-lg btn-secondary py-4 mx-2" style="font-size:24px;">BIDS</a>
        <a href="{{route('articles.index')}}" class="col-lg-3 btn btn-lg btn-primary  py-4" style="font-size:24px;">ARTICLES</a>
    </div> --}}



    <div class="d-flex justify-content-center m-4">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row g-lg-3 g-2 g-lg-5 justify-content-center">
                <div class="col-lg-3 h-100 col-md-4 col-sm-4" >
                    <div class="card card-users card-table h-100 justify-content-center" style="background: rgba(153, 102, 255, .4); border: 1px solid rgba(111, 74, 186, 0.4);">
                        <div class="block-band"></div>
                        <div class="pt-0 header-title">
                            <div class="row">
                                <a href="{{route('encheres.index')}}" class="col-12 text-center" style="text-decoration: none; color: #000">
                                    <h4 class="no-padding no-margin" style="font-size: 24px;">ENCHERES
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 h-100 col-md-4 col-sm-4">
                    <div class="card card-users card-table h-100 justify-content-center" style="background: rgba(255, 159, 64, 0.4); border: 1px solid rgba(111, 74, 186, 0.4);">
                        <div class="block-band"></div>
                        <div class="pt-0 header-title">
                            <div class="row">
                                <a href="{{route('bids.index')}}" class="col-12 text-center" style="text-decoration: none;color: #000">
                                    <h4 class="no-padding no-margin" style="font-size: 24px;">BIDS
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 h-100 col-md-4 col-sm-4">
                    <div class="card card-users card-table h-100 justify-content-center" style="background: rgba(153, 102, 255, .4); border: 1px solid rgba(111, 74, 186, 0.4);">
                        <div class="block-band"></div>
                        <div class="pt-0 header-title">
                            <div class="row">
                                <a href="{{route('articles.index')}}" class="col-12 text-center" style="text-decoration: none;color: #000">
                                <h4 class="no-padding no-margin" style="font-size: 24px;">ARTICLES
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-lg-3 g-2">
        <div class="col-lg-3 h-100 col-md-6 col-sm-6">
            <div class="card card-users card-table h-100 justify-content-center">
                <div class="block-band"></div>
                <div class="pt-0 header-title">
                    <div class="row g-3">
                        <div class="col-12 d-flex justify-content-between">
                            <h4 class="no-padding no-margin">UTILISATEURS ({{$users->count()}})
                            </h4>
                            <div class="icon-card">
                                <i class="fi fi-rr-users-alt"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <h5>Total</h5>
                            <div class="num-lg">
                                1000000
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>Connectés</h6>
                            <div class="num-sm">
                                1000000
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>Nouveaux</h6>
                            <div class="num-sm">
                                1000000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 h-100 col-md-6 col-sm-6">
            <div class="card card-users card-table h-100 justify-content-center">
                <div class="block-band"></div>
                <div class="pt-0 header-title">
                    <div class="row g-3">
                        <div class="col-12 d-flex justify-content-between">
                            <h4 class="no-padding no-margin">ARTICLES ({{$articles->count()}})
                            </h4>
                            <div class="icon-card">
                                <i class="fi fi-rr-puzzle"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <h5>Total</h5>
                            <div class="num-lg">
                                ({{$articles->count()}})
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>En ligne</h6>
                            <div class="num-sm">
                                20
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>Nouveaux</h6>
                            <div class="num-sm">
                                2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p></p>
        </div>
        <div class="col-lg-3 h-100 col-md-6 col-sm-6">
            <div class="card card-users card-table h-100 justify-content-center">
                <div class="block-band"></div>
                <div class="pt-0 header-title">
                <div class="row g-3">
                    <div class="col-12 d-flex justify-content-between">
                        <h4 class="no-padding no-margin">SALONS ({{$articles->count()}})
                        </h4>
                        <div class="icon-card">
                            <i class="fi fi-rr-puzzle"></i>
                        </div>
                    </div>
                    <div class="col-12">
                        <h5>Total</h5>
                        <div class="num-lg">
                            2
                        </div>
                    </div>
                    <div class="col-6">
                        <h6>En Cours</h6>
                        <div class="num-sm">
                            1
                        </div>
                    </div>
                    <div class="col-6">
                        <h6>Terminés</h6>
                        <div class="num-sm">
                            221
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 h-100 col-md-6 col-sm-6">
            <div class="card card-users card-table h-100 justify-content-center">
                <div class="block-band"></div>
                <div class="pt-0 header-title">
                    <div class="row g-3">
                        <div class="col-12 d-flex justify-content-between">
                            <h4 class="no-padding no-margin"> ENCHERES (0) ({{$articles->count()}})
                            </h4>
                            <div class="icon-card">
                                <i class="fi fi-rr-puzzle"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <h5>Total</h5>
                            <div class="num-lg">
                                2
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>En Cours</h6>
                            <div class="num-sm">
                                1
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>Terminés</h6>
                            <div class="num-sm">
                                221
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row mt-2">
        <div class="col-md-6" >
            <div class="card card-passe full-height">
                <div class="card-body">
                    <canvas id="userChart" width="400" height="400"></canvas>
                </div>
                <a href="{{ route('stats.index')}}" class="btn btn-sm btn-secondary">Stats</a>
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
                                 <div class="card-tools">
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
                                </div>
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

                {{-- <div class="col-md-12">
                    <div class="card table-size-seconde">
                        <div class="card-body ">
                             <div class="card-title fw-mediumbold">Encheres encours...</div>
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
                                                 <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                             </div>
                                        </div>

                                    @endif
                                @endforeach
                            </div>
                         </div>
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
                                                     <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                 </div>
                                            </div>

                                        @endif


                                    @endforeach
                                     @if ($enchere_future == null)
                                        <h1 class="text-danger text-center fw-bold my-5">Pas d'enchère future</h1>
                                    @endif
                             </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
         <div class="col-md-12">
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
        </div>

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
