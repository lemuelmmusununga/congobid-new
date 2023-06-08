@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="row">
        <div class="col-sm-3 col-md-4">
            <div class="page-inner">
                <div class="card card-profile">
                    <div class="card-header" style="background-image: url('')">
                        <div class="profile-picture">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('images/articles/'.$article->image[0]->lien) }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-profile text-center">
                            <div class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $article->user->nom }} </font></font></div>
                            <div class="job"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ '@'.$article->user->username }} </font></font></div>
                            <div class="desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $article->user->telephone }} {{ $article->user->email == null ? '' : '/ '.$article->user->email }} </font></font></div>
                            <div class="desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $article->user->telephone }} {{ $article->user->email == null ? '' : '/ '.$article->user->email }} </font></font></div>
                            <div class="desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ajouté par : <a href="{{ route('agents.show', $article->admin_id) }}"> {{ $article->admin->nom }} </a> </font></font></div>
                        <div class="view-profile">
                            <a href="{{ route('articles.edit', [$article->id]) }}" class="btn btn-primary btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editer</font></font></a>
                            @if ($article->statut->id == 1)
                                <a href="{{ route('articles.destroy', [$article->user->id, 1]) }}" class="btn btn-success btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Activer</font></font></a>
                            @elseif ($article->statut->id == 2)
                                <a href="{{ route('articles.destroy', [$article->user->id, 2]) }}" class="btn btn-success btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Réactiver</font></font></a>
                            @elseif ($article->statut->id == 3)
                                <a href="{{ route('articles.destroy', [$article->user->id, 3]) }}" class="btn btn-danger btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Supprimer</font></font></a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row user-stats text-center">
                        <div class="col">
                            <div class="number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $article->balance }} </font></font></div>
                            <div class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Balance</font></font></div>
                        </div>
                        <div class="col">
                            <div class="number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $article->bonus }} </font></font></div>
                            <div class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bonus</font></font></div>
                        </div>
                        <div class="col">
                            <div class="number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $article->nontransferable }} </font></font></div>
                            <div class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Non transferable</font></font></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('javascript')
@endsection

