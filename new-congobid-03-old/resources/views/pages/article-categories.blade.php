@extends('layouts.app-page')
@section('content')
<div class="block-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4 class="text-center title">{{$nom}}</h4>
          <div class="all-message">
            <div class="d-flex justify-content-end">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-filter-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Filtrer
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="block-all-enchere mt-3 pb-4">
    <div class="block-enchere-in-progress">
      <div class="container">
        <div class="row g-3">
            @if ($articles->count() <= 0)
                <p class="text-center">Pas d'article pour l'instans.</p>
            @else
              @foreach ($articles as $key => $article)
                <div class="col-md-6 col-lg-4 col-xl-3 col-xxl-3">
                    <div class="card card-product">
                      <div class="container-fluid px-0">
                          <div class="row g-2">
                          <div class="col-6 d-flex">
                              <div class="item-badge">
                              Lot n°{{$article->id}}
                              </div>
                          </div>
                          <div class="col-6 d-flex justify-content-end">
                              <div class="item-badge">
                              Toute les villes
                              </div>
                          </div>
                          <div class="col-12 d-flex justify-content-center">
                              <div class="time-block text-center">
                                @if ($article->enchere?->munite* 60 + $article->enchere?->seconde > 0 && $article->enchere?->state == 0 &&
                                  date('d-m-Y', strtotime($article->enchere?->date_debut)) == now()->format('d-m-Y') &&
                                  date('d-m-Y H:i',strtotime($article->enchere?->date_debut)) <= now(' Africa/kinshasa')->format('d-m-Y H:i'))
                                  <h6 class="title mb-0">Enchère en cours</h6>
                                  <div class="time">
                                      @livewire('decrematation', ['getart'=>$article->enchere?->id])
                                  </div>
                                @else
                                  <h6 class="title mb-0">l'enchère débute </h6>
                                  <div class="time">
                                    {{date('l j-m',strtotime($article->enchere?->date_debut)) .' à '. date('H:i',strtotime($article->enchere?->date_debut)) }}
                                  </div>
                                @endif
                              </div>
                          </div>
                          <div class="col-5">
                              <div class="block-cat">
                              <p>Catégorie :</p>
                              <h5 class="mb-0">{{$article->paquet?->libelle}}</h5>
                              </div>
                              <div class="block-cat">
                              <p>Prix CongoBid :</p>
                              <h5>{{$article->prix}}</h5>
                              <p>Prix du Marché :</p>
                              <h5 class="text-hidden mb-0">{{$article->prix_marche}}</h5>
                              </div>
                          </div>
                          <div class="col-7">
                              <div class="card-img">
                              <img src="{{ asset('images/articles/' . ($article->images->first()->lien == null ? '' : $article->images->first()->lien) ) }}" alt="">
                              </div>
                          </div>
                          <div class="col-12 text-center">
                            <h2>{{ $article->titre }}</h2>
                            <p>{{ Str::substr($article->description, 0, 80) }}...
                              <a href="{{ route('show.detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                class="link">Voir plus</a>
                          </div>
                          <div class="col-4 text-center">
                              <a href="#" class="btn btn-3d-rounded-sm w-100 h-100" data-bs-toggle="modal" data-bs-target="#modalsalon{{$key}}">
                              Ouvrir un salon
                              </a>
                          </div>
                          <div class="col-4 text-center">
                            @if (Auth::user())
                                <?php
                                    $favori_enchere =App\Models\Favoris::where('enchere_id', $article->enchere?->id)->where('user_id', Auth::user()->id)->first() ?? null;
                                ?>
                                @if ($favori_enchere != null )
                                  @if (Auth::user() )
                                      <a href="{{route('delete.favoris',['id'=>$article->enchere->id,'name'=>Auth::user()->id])}}" class="btn btn-3d-rounded-sm w-100 h-100 text-black {{ $favori_enchere == null ?'card-salon':'card-salon-me'}}">
                                          <i class="fi fi-rr-plus"></i> Favorie
                                      </a>
                                  @else
                                      <a href="{{route('add.favoris',['id'=>$article->enchere->id,'name'=>Auth::user()->id])}}" class="btn btn-3d-rounded-sm w-100 h-100">
                                          <i class="fi fi-rr-plus"></i> Ajouter aux favories
                                      </a>
                                  @endif
                                @else
                                  <a href="{{route('add.favoris',['id'=>$article->enchere->id,'name'=>Auth::user()->id])}}" class="btn btn-3d-rounded-sm w-100 h-100">
                                      <i class="fi fi-rr-plus"></i> Ajouter aux favories
                                  </a>
                                @endif
                            @else
                                <a href="/register" class="btn btn-3d-rounded-sm w-100 h-100">
                                    <i class="fi fi-rr-plus"></i> Ajouter aux favories
                                </a>
                            @endif
                          
                          </div>
                            <div class="col-4 text-center">
                              <a href="#" class="btn btn-3d-rounded-sm w-100 h-100 ">
                                  Voter pour la prochaine enchère
                              </a>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
              @endforeach
            @endif
        </div>
      </div>
    </div>
  </div>
  @livewire('counte-mumber-salon',['articles'=>$articles])

  
@endsection
