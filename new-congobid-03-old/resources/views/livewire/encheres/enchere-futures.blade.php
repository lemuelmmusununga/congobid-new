<div>
    <div>

        <div class="wrapper">

            <div class="block-bid-home">
                <div class="text-center">
                    <h2>ENCHERE FUTURE</h2>
                </div>
                <div class="container">
                    <div class="row g-4 mb-4">
                        @foreach ($articles as $article)
                            @php
                                $pivot = null ;
                                $test = (($article->enchere->date_debut) > (now('Africa/Kinshasa')->format('Y-m-d H:i:s')));
                            @endphp
                            @if ($test && $article->enchere->state == 0 )
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6" id="{{ Str::slug(Str::lower($article->titre)) }}">
                                    <div class="card" id="">
                                        <div class="timeUpdate">
                                            <div class="text-center text-success">
                                                <h6 class="text-success">L'énchere démarre</h6>
                                                <h6 class="text-success">{{ (date('d-m-Y', strtotime($article->enchere->date_debut))) == now('Africa/Kinshasa')->format('d-m-Y') ? 'Aujourd\'hui' : 'Date du début' }}</h6>
                                                <h5 class="text-success">{{ date('d-m-Y', strtotime($article->enchere->date_debut)) . ' à ' . date('H:i:s',strtotime($article->enchere->date_debut)) }}
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="container-fluid px-0">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="block-price">
                                                        <h6>Catégorie :
                                                            <span>{{ $article->paquet->libelle ?? '' }}</span></h6>
                                                        <h6>Prix CongoBid : <span>{{ $article->prix }}$</span></h6>
                                                        <h6> Prix Kinshasa : <span> <strike style="color: black;">
                                                                    {{ $article->prix_marche }}$ </strike> </span>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="col-7">

                                                    {{-- <img src="{{ asset('images/articles/'.($article->images == null ? null : $article->images[0]->lien) ) }}" alt="{{ $article->titre }}"> --}}
                                                    <img src="{{ asset('images/articles/' . ($article->images->first()->lien)) }}"
                                                        alt="img" class="w-100">
                                                </div>
                                            </div>
                                        </div>
                                        @if (Auth::user())
                                            <div
                                                class="block-statut unactive ">
                                                <div class="statut">
                                                    <span class="blink"></span>
                                                </div>
                                            </div>
                                        @endif
                                        <h5 class="text-center mt-2">{{ $article->titre }}</h5>
                                        <h6 class="text-center">{{ $article->marque }}</h6>
                                        <span
                                            class="text-center">{{ Str::substr($article->description, 0, 80) }}...</span>
                                        <a href="{{ route('show.detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                            class="text-center d-block mb-3">Voir plus</a>
                                        @if (Auth::user())
                                            @include('components.outils')
                                        @endif
                                        @include('components.favoris')

                                        @include('components.boutons')
                                    </div>
                                </div>
                                {{-- @endif --}}
                            @endif
                            {{-- achat roi --}}
                            <div wire:ignore.self class="modal fade" id="achat_roi_{{ $article->id }}"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="icon">
                                                <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                            </div>
                                            @if (Auth::user())
                                                <div class="text-center">
                                                    <h1>{{ $article->paquet->libelle }} </h1>
                                                    @php
                                                        $prix_roi = App\Models\Roi::where('paquet_id', $article->paquet->id)->first()->bid_prix;

                                                    @endphp

                                                    <h5>Pour acheter l'option roi , il vous faut {{ $prix_roi ?? '' }}
                                                        bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                    @if (Auth::user()->bideurs->first()->balance >= $prix_roi)
                                                        @if ($pivot != null && Auth::user()->pivotbideurenchere->first() != null)
                                                            <a type="button"
                                                                href="{{ route('roi', ['enchere' => $article->enchere->id, 'paquet' => $prix_roi, 'name' => Auth::user()->nom]) }}"
                                                                class="btn btn-ok w-50 ">Acheter</a>
                                                        @else
                                                            <a type="button" href="#" data-bs-dismiss="modal"
                                                                data-bs-toggle="modal" aria-label="close"
                                                                data-bs-target="#modalEnchere_{{ $article->id }}"
                                                                class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                                        @endif
                                                    @else
                                                        <a type="button" href="{{ route('clients.achat.bid') }}"
                                                            class="btn btn-ok w-50 ">Acheter</a>
                                                    @endif
                                                </div>
                                            @else
                                                <div class="text-center">
                                                    <h5>Pour acheter l'option roi , il vous faut {{ $prix_roi ?? '' }}
                                                        bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                    <a type="button" href="/login"
                                                        class="btn btn-ok w-50 ">Connecter vous</a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                                aria-label="close">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- bouclier --}}
                            <div wire:ignore.self class="modal fade" id="achat_bouclier_{{ $article->id }}"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="icon">
                                                <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                            </div>
                                            @php
                                                $prix_bouclier = App\Models\Bouclier::where('paquet_id', $article->paquet->id)->first()->bid_prix;

                                            @endphp
                                            {{ $article->paquet->id }}
                                            <div class="text-center">
                                                <h5>Pour acheter il vous faut {{ $prix_bouclier }} bids pour cette
                                                    enchere Voulez-vous Acheter ?</h5>
                                                @if ($pivot != null)
                                                    @if (Auth::user()->bideurs->first()->balance >= $prix_bouclier)
                                                        <a type="button"
                                                            href="{{ route('bouclier', ['enchere' => $article->enchere->id, 'paquet' => $prix_bouclier, 'name' => Auth::user()->nom]) }}"
                                                            class="btn btn-ok w-50">Acheter</a>
                                                    @else
                                                        <a type="button" href="{{ route('clients.achat.bid') }}"
                                                            class="btn btn-ok w-50 ">Acheter</a>
                                                    @endif
                                                @else
                                                    <a type="button" href="#" data-bs-dismiss="modal"
                                                        data-bs-toggle="modal" aria-label="close"
                                                        data-bs-target="#modalEnchere_{{ $article->id }}"
                                                        class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                                aria-label="close">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- foudre --}}
                            <div wire:ignore.self class="modal fade" id="achat_foudre_{{ $article->id }}"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="icon">
                                                <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                            </div>
                                            @php
                                                $prix_foudre = App\Models\Foudre::where('paquet_id', $article->paquet->id)->first()->bid_prix;

                                            @endphp

                                            <div class="text-center">
                                                <h5>Pour acheter il vous faut {{ $prix_foudre }} bids pour cette
                                                    enchere Voulez-vous Acheter ?</h5>
                                                @if ($pivot != null)
                                                    @if (Auth::user()->bideurs->first()->balance > $prix_foudre)
                                                        <a type="button"
                                                            href="{{ route('foudre', ['enchere' => $article->enchere->id, 'paquet' => $prix_foudre, 'name' => Auth::user()->nom]) }}"
                                                            class="btn btn-ok w-50">Acheter</a>
                                                    @else
                                                        <a type="button" href="{{ route('clients.achat.bid') }}"
                                                            class="btn btn-ok w-50 ">Acheter</a>
                                                    @endif
                                                @else
                                                    <a type="button" href="#" data-bs-dismiss="modal"
                                                        data-bs-toggle="modal" aria-label="close"
                                                        data-bs-target="#modalEnchere_{{ $article->id }}"
                                                        class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                                aria-label="close">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- click --}}
                            <div wire:ignore.self class="modal fade" id="achat_click_{{ $article->id }}"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="icon">
                                                <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                            </div>
                                            @php
                                                $prix_click = App\Models\Click_auto::where('paquet_id', $article->paquet->id)->first()->bid_prix;
                                            @endphp
                                            {{ $article->paquet->id }}
                                            <div class="text-center">
                                                <h5>Pour acheter il vous faut {{ $prix_click }} bids pour cette
                                                    enchere Voulez-vous Acheter ?</h5>
                                                @if ($pivot != null)
                                                    @if (Auth::user()->bideurs->first()->balance >= $prix_click)
                                                        <a type="button"
                                                            href="{{ route('click', ['enchere' => $article->enchere->id, 'paquet' => $prix_click, 'name' => Auth::user()->nom]) }}"
                                                            class="btn btn-ok w-50">Acheter</a>
                                                    @else
                                                        <a type="button" href="{{ route('clients.achat.bid') }}"
                                                            class="btn btn-ok w-50 ">Acheter</a>
                                                    @endif
                                                @else
                                                    <a type="button" href="#" data-bs-dismiss="modal"
                                                        data-bs-toggle="modal" aria-label="close"
                                                        data-bs-target="#modalEnchere_{{ $article->id }}"
                                                        class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                                aria-label="close">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- modal participer --}}
                            <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $article->id }}"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="icon">
                                                <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                            </div>
                                            <div class="text-center">

                                                <h5>Voulez-vous participer à cette enchère ?</h5>
                                                {{-- @if (Auth::user()) --}}
                                                <p> Pour y participer, veuillez souscrire à la catégorie
                                                    "{{ $article->paquet->libelle }}" en
                                                    payent {{ $article->paquet->prix }} bids.</p>
                                                {{-- @endif --}}
                                            </div>
                                        </div>

                                        <div class="modal-footer d-flex justify-content-between align-items-center">
                                            <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                                aria-label="close">Annuler</button>
                                            @if (Auth::user())
                                                <a type="button"
                                                    href="{{ route('detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                                    class="btn btn-ok">Accepter</a>
                                            @else
                                                <a type="button" href="/login" class="btn btn-ok">Accepter</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- modale --}}
                            <div wire:ignore.self class="modal fade" id="modalEnchereDetail_{{ $article->id }}"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="icon">
                                                <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                            </div>
                                            <div class="text-center">
                                                <h5>Enchère en attente</h5>
                                                @if (Auth::user())
                                                    <p>Cette enchère va commencer le
                                                        {{ $article->enchere->date_debut . ' à ' . $article->enchere->heure_debut }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="modal-footer d-flex justify-content-between align-items-center">
                                            <button type="button" class="btn btn-no"
                                                data-bs-dismiss="modal">Annuler</button>
                                            <a type="button"
                                                href="{{ route('detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                                class="btn btn-ok">Accepter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- modal like --}}
                            <div class="modal fade" id="modalArticle" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="icon">
                                                <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                            </div>
                                            <div class="text-center">
                                                <input type="text" wire:model="participer">
                                                <h5>Voulez-vous aimer cet article ?</h5>
                                                <p> Si vous aimez cet article, il passe à la prochaine
                                                    enchère.</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-between align-items-center">
                                            <button type="button" class="btn btn-no"
                                                data-bs-dismiss="modal">Annuler</button>
                                            <button type="button" class="btn btn-ok"><span class="iconify"
                                                    data-icon="ant-design:heart-filled"></span> J'aime</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end modal --}}
                        @endforeach
                    </div>
                    <div class="block-pagination">
                        {{ $articles->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
