@extends('layouts.app-page')
@section('content')
    <div class="block-page">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3">
            <h4 class="text-center title">Mes Salons</h4>
            <div class="all-message">
                <div class="d-flex justify-content-between">
                {{-- <input type="text" class="form-control me-1" placeholder="Recherche"> --}}
                <div class="dropdown">
                    <button class="btn btn-sm btn-secondary dropdown-toggle btn-filter-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Filtrer
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <a href="{{route('clients.salons.index')}}" class="btn btn-3d-rounded-sm w-50">
                     Salons
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="block-all-enchere mt-4 pb-4">
            <div class="block-enchere-in-progress">
                <div class="container">
                    <div class="row g-3">
                        {{-- @dd($salons) --}}
                        @if ($salons->count() > 0)
                            @foreach ($salons as $key=> $salon)
                                    
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card card-product {{$salon->pivotclientsalon?->where('user_id',Auth::user()->id)->first() == null ?'card-salon':'card-salon-me'}}">
                                        <div class="container-fluid px-0">
                                            <div class="row g-2 justify-content-center align-items-center">
                                                <div class="col-4 d-flex">
                                                    <div class="item-badge">
                                                        Lot n°32 {{Auth::user()->pivotclientsalon}}
                                                    </div>
                                                </div>
                                                <div class="col-3 d-flex justify-content-center">
                                                    <div class="item-badge">
                                                        Privé
                                                    </div>
                                                </div>
                                                <div class="col-5 d-flex justify-content-end">
                                                    <div class="item-badge">
                                                        Toute les villes
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card-img card-sm">
                                                        <div class="num">1</div>
                                                        <img src="{{asset('images/articles/'.$salon->article->images[0]->lien) }}" alt="">
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-8">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4 class="article-title">
                                                                {{ $salon->article->titre ?? '' }}
                                                            </h4>
                                                            <div class="part d-flex">
                                                                <div class="num-all-part">
                                                                    {{ $salon->pivotclientsalon->count() }}/
                                                                </div>
                                                                <div class="num-part">
                                                                    <span>{{ $salon->limite ?? '' }}</span>
                                                                    <span>Participants</span>
                                                                </div>
                                                            </div>
                                                            <div class="detail">
                                                                L'enchère de cette article débutera dans
                                                                <div class="time-block d-inline-flex">
                                                                    <div class="time">03:08:04</div>
                                                                </div>
                                                                à condition que le quota {{$salon->limite}} Participants soit
                                                                atteint.
                                                            </div>
                                                            @if ($salon->pivotclientsalon?->where('user_id',Auth::user()->id)->first() === null)
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalEnchereSalon_{{$key}}" class="btn btn-3d-rounded-sm">
                                                                    <i class="fi fi-rr-plus"></i> Demander l'accès au
                                                                    salon 
                                                                </a>
                                                            @else
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalEnchereAnnuler_{{$key}}" class="btn btn-3d-rounded-sm">
                                                                <i class="fi fi-rr-plus"></i> Decliener l'accès au
                                                                salon 
                                                            </a> 
                                                                
                                                                
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h1 class="text-center">Vous n'avez pas des salon pour l'instant !</h1>
                        @endif
                        
                    
                    </div>
                </div>
            </div>
        </div>

    </div>
    @foreach ($salons as $key=> $salon)
        
        {{-- modal participer --}}
        <div wire:ignore.self class="modal fade" id="modalEnchereSalon_{{$key}}"
            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="icon">
                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                        </div>
                        <div class="text-center">
                            <h5>Voulez-vous participer au Salon ?</h5>
                            {{-- @if (Auth::user()) --}}
                            <p> Pour y participer, veuillez souscrire à la catégorie
                                {{-- "{{ $salon->article->paquet->libelle }}"  --}}
                                en payent {{$salon->montant }} bids.</p>
                            {{-- @endif --}}
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                            aria-label="close">Annuler</button>
                        @if (Auth::user() && Auth::user()->bideurs->first()->balance >= $salon->montant)
                            <a type="button"
                                href="{{ route('detail.article.salon', ['articleid' => $salon->article->id, 'salonid' => $salon->id,'enchereid' => $salon->article->enchere->id ,'paquet'=>$salon->article->paquet->id,'name' => Str::slug($salon->article->titre) ]) }}"
                                class="btn btn-ok">Accepter</a>
                        @elseif (Auth::user() && Auth::user()->bideurs->first()->balance < $salon->montant )
                            <a type="button"
                            href="{{ route('clients.achat.bid') }}"
                            class="btn btn-ok">Accepter</a>
                        @else
                            <a type="button" href="/login" class="btn btn-ok">Accepter</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- modale annuler salon--}}
        <div wire:ignore.self class="modal fade" id="modalEnchereAnnuler_{{$key}}"
            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="icon">
                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                        </div>

                        <div class="text-center">
                            <h5>
                                Voulez vous vraiment annuler votre participation ?
                            </h5>

                            {{-- <a type="button" href="{{ route('annuler.salon',['articleid'=>$salon->articleid,'enchereid'=>$salon->article?->enchere?->id,'salon'=>$salon->montant ,'name'=>$salon->article?->titre]) }}" class="btn btn-ok w-50 my-3 ">Oui</a> --}}

                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                            aria-label="close">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
