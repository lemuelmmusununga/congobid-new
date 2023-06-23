
{{-- <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-card justify-content-center w-100 align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white fw-bold">Bienvenue sur votre <br> <span> Tableau de bord </span> </h2> --}}
                {{-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> --}}
            {{-- </div> --}}
            {{-- <div class="button ml-md-auto py-2 py-md-0"> --}}

                {{-- <a href="#" class="btn btn-sm btn-secondary btn-round text-white">Ajouter un produit</a> --}}
            {{-- </div> --}}
        {{-- </div>
    </div>
</div> --}}
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
                                    <h4 class="no-padding no-margin" style="font-size: 24px;"><i class="fi fi-rr-dice-alt"></i> ENCHERES
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
                                    <h4 class="no-padding no-margin" style="font-size: 24px;"><i class="fi fi-rr-coins"></i> BIDS
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
                                <h4 class="no-padding no-margin" style="font-size: 24px;"><i class="fi fi-rr-puzzle"></i> ARTICLES
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
                                24200
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
    <div class="row g-lg-3 g-2">
        <div class="row">
            <a href="{{route('stats.index')}}" class="col-12 text-center" style="padding-inline: 30%;text-decoration: none; color: #121212">
                <h4 class="no-padding no-margin" style="font-size: 24px; background: rgba(20, 50, 255, .4); border: 1px solid rgba(111, 74, 186, 0.4);border-radius:10px;">STATISTIQUES
                </h4>
            </a>
        </div>
    </div>
    <div class="row g-lg-2 g-2">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="col-lg-12">
                <div class="card card-dash-lg">
                    <div class="glass"></div>
                    <div class="d-flex justify-content-between">
                        <h4>Listes des Enchères terminées</h4>
                        <a href="#" class="btn btn-primary"><i class="fi fi-rr-plus me-1"></i>Ajouter</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom de l'article</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Vainqueur</th>
                                <th scope="col">Ville</th>
                                <th scope="col">Date</th>
                                <th scope="col">Statut</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Chaise roulante</td>
                                    <td>40 $</td>
                                    <td>Michel BAKANDA</td>
                                    <td>Kinshasa</td>
                                    <td class="date">
                                        20 Janv 2023
                                    </td>
                                    <td>
                                        <div class="badge normal">
                                            Payé
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Voir</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>TV 43"</td>
                                    <td>140 $</td>
                                    <td>Gefte DINKINDA</td>
                                    <td>Kinshasa</td>
                                    <td class="date">
                                        18 Janv 2023
                                    </td>
                                    <td>
                                        <div class="badge warning">
                                            En attente
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Voir</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Iphone XR</td>
                                    <td>240 $</td>
                                    <td>Yasmine DESI</td>
                                    <td>Matadi</td>
                                    <td class="date">
                                        15 Janv 2023
                                    </td>
                                    <td>
                                        <div class="badge normal">
                                            Payé
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Voir</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Caméra</td>
                                    <td>20 $</td>
                                    <td>Jean MK</td>
                                    <td>Lubumbasho</td>
                                    <td class="date">
                                        14 Janv 2023
                                    </td>
                                    <td>
                                        <div class="badge normal">
                                            Payé
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Voir</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Peujot 2008</td>
                                    <td>1140 $</td>
                                    <td>Sylvie MAKETA</td>
                                    <td>Kinshasa</td>
                                    <td class="date">
                                        09 Janv 2023
                                    </td>
                                    <td>
                                        <div class="badge normal">
                                            Payé
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Voir</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Chemise</td>
                                    <td>20 $</td>
                                    <td>Alain MAKANDA</td>
                                    <td>Kinshasa</td>
                                    <td class="date">
                                        5 Janv 2023
                                    </td>
                                    <td>
                                        <div class="badge normal">
                                            Payé
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Voir</a>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-dash-lg">
                    <div class="glass"></div>
                    <div class="d-flex justify-content-between">
                        <h4>Listes des Salons </h4>
                        <a href="#" class="btn btn-primary"><i class="fi fi-rr-plus me-1"></i>Ajouter</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom de l'article</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Chaise roulante</td>
                                    <td>40 $</td>
                                    <td class="date">
                                        3 Juin 2023 à 17h00
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Modifier</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Pantalon</td>
                                    <td>20 $</td>
                                    <td class="date">
                                        4 Juin 2023 à 17h00
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Modifier</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Vareuse</td>
                                    <td>20 $</td>
                                    <td class="date">
                                        5 Juin 2023 à 18h00
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Modifier</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Chaine musicale</td>
                                    <td>10 $</td>
                                    <td class="date">
                                        6 Juin 2023 à 08h00
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Modifier</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Voyage Dubai</td>
                                    <td>540 $</td>
                                    <td class="date">
                                        7 Juin 2023 à 17h00
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Modifier</a>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="row">
                <div class="col-12">
                    <div class="card card-dash-md mb-3">
                        <div class="glass"></div>
                        <div class="text-star">
                            <h4> Enchères du jour</h4>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="block-circles mt-3">
                                    <div class="circle">
                                        <div class="circle-move" style="background: conic-gradient( #16b085 50%, transparent 0%);"></div>
                                        <div class="circle-white">
                                            <span>5/10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-dash-md">
                        <div class="glass"></div>
                        <div class="text-star">
                            <h4>Enchères futures</h4>
                        </div>
                        <div class="all-tasks">
                            <div class="task d-flex align-items-start">
                                
                                <div class="block-content-task d-flex justify-content-between w-100">
                                    <div class="card justify-content-center w-100">
                                        <h6 class="mb-0"><i class="fi fi-rr-exclamation"></i> Iphone 13 pro max</h6>
                                        <small>Prix : 50 $</small>
                                        <p class="mb-0">Le 12 Janv 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="task d-flex align-items-start">
                                <div class="block-content-task d-flex justify-content-between w-100">
                                    
                                    <div class="card justify-content-center w-100">
                                        <h6 class="mb-0"> <i class="fi fi-rr-exclamation"></i> Parcelle</h6>
                                        <small>Prix : 150 $</small>
                                        <p class="mb-0">Le 01 Déc 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="task d-flex align-items-start">
                                
                                <div class="block-content-task d-flex justify-content-between w-100">
                                    <div class="card justify-content-center w-100">
                                        <h6 class="mb-0"><i class="fi fi-rr-exclamation"></i> Tv Samsung</h6>
                                        <small>Prix : 80 $</small>
                                        <p class="mb-0">Le 14 Juin 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="task d-flex align-items-start">
                                
                                <div class="block-content-task d-flex justify-content-between w-100">
                                    <div class="card justify-content-center w-100">
                                        <h6 class="mb-0"><i class="fi fi-rr-exclamation"></i> Iphone X </h6>
                                        <small>Prix : 20 $</small>
                                        <p class="mb-0">Le 2 Mars 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="task d-flex align-items-start">
                                
                                <div class="block-content-task d-flex justify-content-between w-100">
                                    <div class="card justify-content-center w-100">
                                        <h6 class="mb-0"><i class="fi fi-rr-exclamation"></i> Fer à repasser</h6>
                                        <small>Prix : 5 $</small>
                                        <p class="mb-0">Le 12 Janv 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    

    <!-- Modal -->

    
</div>
