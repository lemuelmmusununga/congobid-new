@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="row">
        <div class="col-sm-3 col-md-4">
            <div class="page-inner">
                <div class="card card-profile">
                    <div class="card-header" style="background-image: url('{{ asset('images/profil/'.$bideur->avatar) }}')">
                        <div class="profile-picture">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('images/profil/'.$bideur->user->avatar) }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-profile text-center">
                            <div class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->user->nom }} </font></font></div>
                            <div class="job"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ '@'.$bideur->user->username }} </font></font></div>
                            <div class="desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->user->telephone }} {{ $bideur->user->email == null ? '' : '/ '.$bideur->user->email }} </font></font></div>
                            <div class="desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->user->telephone }} {{ $bideur->user->email == null ? '' : '/ '.$bideur->user->email }} </font></font></div>
                            <div class="desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ajouté par : <a href="{{ route('agents.show', $bideur->admin_id) }}"> {{ $bideur->admin->nom }} </a> </font></font></div>
                        <div class="view-profile">
                            <a href="{{ route('bideurs.edit', [$bideur->id]) }}" class="btn btn-primary btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editer</font></font></a>
                            @if ($bideur->statut->id == 1)
                                <a href="{{ route('bideurs.destroy', [$bideur->user->id, 1]) }}" class="btn btn-sm btn-success btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Activer</font></font></a>
                            @elseif ($bideur->statut->id == 2)
                                <a href="{{ route('bideurs.destroy', [$bideur->user->id, 2]) }}" class="btn btn-sm btn-success btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Réactiver</font></font></a>
                            @elseif ($bideur->statut->id == 3)
                                <a href="{{ route('bideurs.destroy', [$bideur->user->id, 3]) }}" class="btn btn-sm btn-danger btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Supprimer</font></font></a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row user-stats text-center">
                        <div class="col">
                            <div class="number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->balance }} </font></font></div>
                            <div class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Balance</font></font></div>
                        </div>
                        <div class="col">
                            <div class="number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->bonus }} </font></font></div>
                            <div class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bonus</font></font></div>
                        </div>
                        <div class="col">
                            <div class="number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->nontransferable }} </font></font></div>
                            <div class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Non transferable</font></font></div>
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
                <div class="col-sm-6 col-md-4">
                    @if ($bideur->user->articles->count() != 0)
                        <a href="{{ route('articles.indexfilter', $bideur->user_id) }}" style="text-decoration: none;">
                    @endif
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enchères participées</font></font></p>
                                        <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->user->pivotbideurenchere->count() }} </font></font></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($bideur->user->articles->count() != 0)
                        </a>
                    @endif
                </div>
                <div class="col-sm-6 col-md-4">
                    @if ($bideur->user->articles->count() != 0)
                        <a href="{{ route('articles.indexfilter', $bideur->user_id) }}" style="text-decoration: none;">
                    @endif
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enchères remportées</font></font></p>
                                        <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->user->gagnants->count() }} </font></font></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($bideur->user->articles->count() != 0)
                        </a>
                    @endif
                </div>
                <div class="col-sm-6 col-md-4">
                    @if ($bideur->user->articles->count() != 0)
                        <a href="{{ route('articles.indexfilter', $bideur->user_id) }}" style="text-decoration: none;">
                    @endif
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enchères perdues</font></font></p>
                                        <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->user->pivotbideurenchere->count() - $bideur->user->gagnants->count() }} </font></font></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($bideur->user->articles->count() != 0)
                        </a>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    @if ($bideur->user->articles->count() != 0)
                        <a href="{{ route('articles.indexfilter', $bideur->user_id) }}" style="text-decoration: none;">
                    @endif
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre de clicks</font></font></p>
                                        <h4 class="card-title">
                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                <?php
                                                $clicks = 0;
                                                foreach ($bideur->user->pivotbideurenchere as $enchere) {
                                                    $clicks = $clicks + $enchere->valeur;
                                                }
                                            ?>
                                            {{ $clicks }}
                                            </font></font>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($bideur->user->articles->count() != 0)
                        </a>
                    @endif
                </div>
                <div class="col-sm-6 col-md-4">
                    @if ($bideur->user->adminbideurs->count() != 0)
                        <a href="{{ route('bideurs.indexfilter', $bideur->user_id) }}" style="text-decoration: none;">
                    @endif
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre messages</font></font></p>
                                        <h4 class="card-title">
                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                {{ $bideur->user->chats->count() }}
                                            </font></font>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($bideur->user->adminbideurs->count() != 0)
                        </a>
                    @endif
                </div>
                <div class="col-sm-6 col-md-4">
                    {{-- @if ($bideur->user->chats->count() != 0)
                        <a href="{{ route('chats.indexfilter', $bideur->user_id) }}" style="text-decoration: none;">
                    @endif --}}
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connexion</font></font></p>
                                        <h4 class="card-title">
                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                {{ $bideur->user->historiques->count() }}
                                            </font></font>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @if ($bideur->user->chats->count() != 0)
                        </a>
                    @endif --}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Roi</font></font></p>
                                        <h4 class="card-title">
                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    {{ $bideur->roi }}
                                            </font></font>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kasonda</font></font></p>
                                        <h4 class="card-title">
                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                {{ $bideur->foudre }}
                                            </font></font>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bouclier</font></font></p>
                                        <h4 class="card-title">
                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                {{ $bideur->bouclier }}
                                            </font></font>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row Card No Padding -->
            <div class="row row-card-no-pd">
                <div class="col-sm-6 col-md-6">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sexe</font></font></p>
                                        <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->user->sexe }} </font></font></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date de naissance</font></font></p>
                                        <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $bideur->user->date_naissance }} </font></font></h4>
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

