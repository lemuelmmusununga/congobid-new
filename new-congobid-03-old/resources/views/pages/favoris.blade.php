@extends('layouts.app-page')
@section('content')
<div class="block-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4 class="text-center title">Favoris</h4>
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
          @if ($favoris->count())

            @foreach ($favoris as $favori)
                <div class="col-md-6 col-lg-4 col-xl-3 col-xxl-3">
                    <div class="card card-product">
                    <div class="container-fluid px-0">
                        <div class="row g-2">
                        <div class="col-6 d-flex">
                            <div class="item-badge">
                            Lot n°{{$favori->enchere?->article?->id}}
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <div class="item-badge">
                            Toute les villes
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            
                            <div class="time-block text-center">
                            <h6 class="title mb-0">{{ date('d-m-Y', strtotime($favori->enchere?->article?->enchere?->date_debut)) == now('Africa/Kinshasa')->format('d-m-Y') ? 'Aujourd\'hui' : 'Date du début' }}
                            </h6>
                            <div class="time">
                                {{ date('d-m-Y', strtotime($favori->enchere?->article?->enchere?->date_debut)) . ' à ' . date('H:i:s', strtotime($favori->enchere?->article?->enchere?->date_debut)) }}

                            </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="block-cat">
                            <p>Catégorie :</p>
                            <h5 class="mb-0">Simba</h5>
                            </div>
                            <div class="block-cat">
                            <p>Prix CongoBid :</p>
                            <h5>{{$favori->enchere->article->prix}}</h5>
                            <p>Prix du Marché :</p>
                            <h5 class="text-hidden mb-0">{{$favori->enchere?->article?->prix_marche}}</h5>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="card-img">
                            <img src="{{ asset('images/articles/' . ($favori?->enchere?->article->images->first()?->lien == null ? '' : $favori?->enchere?->article->images->first()->lien)) }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <h2>{{$favori?->enchere?->article->titre}}</h2>
                            <p> {{Str::substr($favori?->enchere?->article->description, 0, 80)}} </p>
                            <a href="{{ route('show.detail.article', ['id' => $favori?->enchere?->article->id, 'name' => $favori?->enchere?->article->titre]) }}" class="link">Voir plus</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="btn btn-3d-rounded-sm w-100 h-100">
                            Ouvrir un salon
                            </a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="btn btn-3d-rounded-sm w-100">
                            Voter pour cet article pour la prochaine enchère
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
          @else
            <h4 class="text-center title">Pas de Favoris pour l'instant</h4>

          @endif

        </div>
      </div>
    </div>
  </div>

@endsection
