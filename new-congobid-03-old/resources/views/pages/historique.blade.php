@extends('layouts.app-page')
@section('content')
<div class="block-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h4 class="text-center title">Historiques</h4>
          <p class="text-descr">
            L'historique vous permet de voir et retrouver le classement de toutes des personnes qui vous ont bloqués, pendant 1 mois de participation
          </p>
          <div class="all-message">
            <div class="d-flex justify-content-between">
              <input type="text" class="form-control me-1" placeholder="Recherche">
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
            <div class="content-message">
              @if ($users->count() > 0)
              @foreach ($users as $user)

                <a href="#" class="link-message">
                  <div class="card-message">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <div class="block-info-message d-flex align-items-center">
                          <div class="avatar">
                            <img src="{{ asset('images/users/' . ($user->user?->avatar == null ? 'default.png' : $user->user?->avatar)) }}"
                                        alt="">
                          </div>
                          <div class="text">
                            <h6>{{$user->user?->username}}</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-4 d-flex align-items-end" style="flex-direction: column;">
                        <div class="indice">
                          {{$user->user?->blocked->count()}}
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              @endforeach
              @else
                <h4 class="text-center title">Pas d'historique pour ce moi</h4>

              @endif



            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
