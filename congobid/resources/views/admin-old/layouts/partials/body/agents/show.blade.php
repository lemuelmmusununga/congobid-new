@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="row">
        <div class="col-sm-3 col-md-4">
            <div class="page-inner">
                <div class="card card-profile">
                    <div class="card-header" style="background-image: url('{{ asset('images/profil/'.$agent->avatar) }}')">
                        <div class="profile-picture">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('images/profil/'.$agent->user->avatar) }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-profile text-center">
                            <div class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->nom }} </font></font></div>
                            <div class="job"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ '@'.$agent->user->username }} </font></font></div>
                            <div class="desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Poste : {{ $agent->poste }}  </font></font></div>
                            <div class="desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->telephone }} {{ $agent->user->email == null ? '' : '/ '.$agent->user->email }} </font></font></div>
                        <div class="desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Identification fiscale : {{ $agent->identification_fiscale }} </font></font></div>
                        <div class="view-profile">
                            <a href="{{ route('agents.edit', [$agent->id]) }}" class="btn btn-primary btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editer</font></font></a>
                            @if ($agent->statut->id == 1)
                                <a href="{{ route('agents.destroy', [$agent->user->id, 1]) }}" class="btn btn-success btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Activer</font></font></a>
                            @elseif ($agent->statut->id == 2)
                                <a href="{{ route('agents.destroy', [$agent->user->id, 2]) }}" class="btn btn-success btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Réactiver</font></font></a>
                            @elseif ($agent->statut->id == 3)
                                <a href="{{ route('agents.destroy', [$agent->user->id, 3]) }}" class="btn btn-danger btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Supprimer</font></font></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-md-8">
        <div class="page-inner">
        <!-- Card With Icon States Color -->
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    @if ($agent->user->articles->count() != 0)
                        <a href="{{ route('articles.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
                    @endif
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Articles</font></font></p>
                                        <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->articles->count() }} </font></font></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($agent->user->articles->count() != 0)
                        </a>
                    @endif
                </div>
                <div class="col-sm-6 col-md-3">
                    @if ($agent->user->paquets->count() != 0)
                        <a href="{{ route('paquets.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
                    @endif
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catégories</font></font></p>
                                        <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->paquets->count() }} </font></font></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($agent->user->paquets->count() != 0)
                        </a>
                    @endif
                </div>
                <div class="col-sm-6 col-md-3">
                    @if ($agent->user->categories->count() != 0)
                        <a href="{{ route('categories.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
                    @endif
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Souscatégories</font></font></p>
                                        <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->categories->count() }} </font></font></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($agent->user->categories->count() != 0)
                        </a>
                    @endif
                </div>
                <div class="col-sm-6 col-md-3">
                    @if ($agent->user->bids->count() != 0)
                        <a href="{{ route('bids.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
                    @endif
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conversion</font></font></p>
                                        <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->bids->count() }} </font></font></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($agent->user->bids->count() != 0)
                        </a>
                    @endif
                </div>
                <div class="row">
            </div>
            <div class="col-sm-6 col-md-3">
                @if ($agent->user->adminagents->count() != 0)
                    <a href="{{ route('agents.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
                @endif
                <div class="card card-stats card-round">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Agents</font></font></p>
                                    <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->adminagents->count() }} </font></font></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($agent->user->adminagents->count() != 0)
                    </a>
                @endif
            </div>
            <div class="col-sm-6 col-md-3">
                @if ($agent->user->adminbideurs->count() != 0)
                    <a href="{{ route('bideurs.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
                @endif
                <div class="card card-stats card-round">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bideurs</font></font></p>
                                    <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->adminbideurs->count() }} </font></font></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($agent->user->adminbideurs->count() != 0)
                    </a>
                @endif
            </div>
            <div class="col-sm-6 col-md-3">
                @if ($agent->user->gagnants->count() != 0)
                    <a href="{{ route('gagnants.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
                @endif
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gagnants</font></font></p>
                                    <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->gagnants->count() }} </font></font></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($agent->user->gagnants->count() != 0)
                    </a>
                @endif
            </div>
            <div class="col-sm-6 col-md-3">
                @if ($agent->user->sanctions->count() != 0)
                    <a href="{{ route('sanctions.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
                @endif
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col col-stats ml-3 ml-sm-0">
                                <div class="numbers">
                                    <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sanctions</font></font></p>
                                    <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->sanctions->count() }} </font></font></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($agent->user->sanctions->count() != 0)
                    </a>
                @endif
            </div>
        </div>
                <!-- Card With Icon States Background -->
        <div class="row">
            <div class="col-sm-6 col-md-3">
                @if ($agent->user->articles->count() != 0)
                    <a href="{{ route('articles.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
                @endif
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col col-stats ml-3 ml-sm-0">
                                <div class="numbers">
                                    <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Images</font></font></p>
                                    <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->articles->count() }} </font></font></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @if ($agent->user->articles->count() != 0)
                    </a>
                @endif
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            @if ($agent->user->promotions->count() != 0)
                <a href="{{ route('promotions.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
            @endif
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mails</font></font></p>
                                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->promotions->count() }} </font></font></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($agent->user->promotions->count() != 0)
                </a>
            @endif
        </div>
        <div class="col-sm-6 col-md-3">
            {{-- @if ($agent->user->messages->count() != 0)
                <a href="{{ route('messages.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
            @endif --}}
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Messages</font></font></p>
                                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->messages->count() }} </font></font></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @if ($agent->user->messages->count() != 0)
                </a>
            @endif --}}
        </div>
        <div class="col-sm-6 col-md-3">
            {{-- @if ($agent->user->chats->count() != 0)
                <a href="{{ route('chats.indexfilter', $agent->user_id) }}" style="text-decoration: none;">
            @endif --}}
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chats</font></font></p>
                                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->chats->count() }} </font></font></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @if ($agent->user->chats->count() != 0)
                </a>
            @endif --}}
        </div>
    </div>
    <!-- Row Card No Padding -->
    <div class="row row-card-no-pd">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sexe</font></font></p>
                                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->sexe }} </font></font></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date de naissance</font></font></p>
                                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->user->date_naissance }} </font></font></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Type d'agent</font></font></p>
                                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->interne == '0' ? 'Externe' : 'Interne' }} </font></font></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajouté par</font></font></p>
                                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $agent->administrateur_id == null ? 'Congo Bid' : $users->where('id', $agent->administrateur_id)->first()->nom }} </font></font></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
@endsection

