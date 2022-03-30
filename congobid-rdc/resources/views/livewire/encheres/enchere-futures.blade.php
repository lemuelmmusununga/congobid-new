<div>
    <div>
        @include('components.header-index')

            <div class="wrapper">

                <div class="block-bid-home">
                    <div class="text-center">
                        <h2>{{__('content.title-enchere-future')}}</h2>
                    </div>
                    <div class="container">
                        <div class="row g-4 mb-4">
                            @foreach ($articles as $article)
                                <div class="col-12 col-lg-4" id="{{$article->titre}}">
                                    <div class="card" id="">
                                        <div class="timeUpdate">

                                            <div class="text-center">
                                                {{-- <h6>Temps restant</h6> --}}
                                                <h6>Date du début</h6>
                                                <div id="header" class="header" >
                                                    <div class="countdown mt-2">
                                                        {{-- <span id="clock" class="text-black"> --}}
                                                            {{-- <h1 class="text-center" id="count-down-timer_{{ $article->id }}"></h1> --}}
                                                            {{-- @if (now()->format('Y-m-d') <= $article->enchere->date_debut) --}}
                                                                {{ $article->enchere->date_debut }}
                                                            {{-- @else
                                                                Terminé !
                                                                {{ now()->format('Y-m-d') > $article->enchere->date_debut ? 'match' : 'not match' }}
                                                            @endif --}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid px-0">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="block-price">
                                                        <h6>Catégorie : <span>{{ $article->paquet->libelle ??'' }}</span></h6>
                                                        <h6>Prix CongoBid : <span>{{ $article->prix }}$</span></h6>
                                                        <h6>Prix Kinshasa : <span>{{ $article->prix_marche }}$</h6>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    {{-- <img src="{{ asset('images/articles/'.($article->images == null ? null : $article->images[0]->lien) ) }}" alt="{{ $article->titre }}"> --}}
                                                    <img src="{{ asset('images/img-6.png' ) }}" alt="img" class="w-100">
                                                </div>
                                            </div>
                                        </div>
                                        @if (now()->format('Y-m-d') > $article->enchere->date_debut)
                                            <div class="block-statut unactive on">
                                        @else
                                            @if (Auth::user())
                                                <div class="block-statut {{ $article->paquet_id == Auth::user()->bideurs->first()->paquet_id ? 'active' : 'unactive' }} {{ $article->enchere->state == '1' ? 'on' : 'off' }}">
                                            @else
                                                <div class="block-statut">
                                            @endif
                                        @endif
                                            <div class="statut">
                                                <span class="blink"></span>
                                            </div>
                                        </div>
                                        <h5 class="text-center mt-2">{{ $article->titre }}</h5>
                                        <h6 class="text-center">{{ $article->marque }}</h6>
                                        <a href="#" class="text-center d-block mb-3">Voir plus</a>
                                        <div class="block-power d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="{{asset('images/couronne.png')}}" alt="couronne">
                                                <span>X3</span>
                                            </a>
                                            <a href="#">
                                                <img src="{{asset('images/foudre.png')}}" alt="foudre">
                                                <span>X3</span>
                                            </a>
                                            <a href="#">
                                                <img src="{{asset('images/click.png')}}" alt="click">
                                                <span>X3</span>
                                            </a>
                                            <a href="#">
                                                <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                                            </a>
                                        </div>
                                        <div class="text-center mb-3">
                                            <p class="mb-0">
                                                Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
                                            </p>
                                            <a href="#" class="like">
                                                <span class="iconify" data-icon="ant-design:heart-outlined"></span>
                                            </a>
                                            <span>10 Votes</span>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-center">
                                                {{-- <p>
                                                    Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine
                                                    enchère.
                                                </p>
                                                <a href="#">
                                                    <span class="iconify" data-icon="ant-design:heart-filled"></span>
                                                    <span class="num">210</span>
                                                </a> --}}
                                                @if (Auth::user())
                                                    @if (Auth::user()->pivotbideurenchere->where('enchere_id', $article->enchere->id)->first() != null)
                                                        <a href="{{route('show.detail',['id'=>$article->id])}}" class="btn-participer" ><span class="iconify" data-icon="akar-icons:plus"></span>Ouvrir l'enchere</a>
                                                    @else
                                                        <a href="#" class="btn-participer" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify" data-icon="akar-icons:plus"></span> souscrire à cette enchère</a>
                                                    @endif
                                                @else
                                                    <a href="#" class="btn-participer" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify" data-icon="akar-icons:plus"></span> Souscrire à cette enchère</a>
                                                @endif
                                                {{-- @else
                                                        <a href="#" class="btn-participer" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify" data-icon="akar-icons:plus"></span> Participer à cette enchère</a>
                                                @endif --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $article->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                </div>
                                                <div class="text-center">
                                                    <h5>Voulez-vous participer à cette enchère ?</h5>
                                                    @if (Auth::user())
                                                        {{-- @if (($articles->where('id', $article->id)->where('paquet_id', '==', Auth::user()->bideurs->first()->paquet_id)->first() == null) == 1) --}}
                                                            <p> Pour y participer, veuillez souscrire à la catégorie "{{ $article->paquet->libelle }}" en payent {{ $article->paquet->nombre_enchere }} bids.</p>
                                                        {{-- @endif --}}
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="modal-footer d-flex justify-content-between align-items-center">
                                            <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                                            <a type="button" href="/detail-enchere/{{ $article->id }}"  class="btn btn-ok">Accepter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="block-pagination">
                            {{$articles->links()}}
                        </div>
                    </div>

        </div>

</div>
