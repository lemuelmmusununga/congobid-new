   
    <div wire:ignore.self class="modal fade" id="option_roi_{{$article->enchere?->pivotbideurenchere?->first()->enchere_id ?? ''}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">

                        @if (Auth::user())
                            {{-- @if ($article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->roi == 0 && $article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->foundre == 0 )
                                <h5> Pour bloquer  "{{ $article->user->nom  }}" <br> il vous faut {{$article->enchere->paquet->prix}} bids Pour acheter les options</h5>
                                <button type="button" class="btn btn-no" data-bs-dismiss="modal" wire:click.prevent()="option({{10}})"> Acheter</button>
                            @else --}}
                                <h5>Voulez vous acheter le "roi" pour cette enchere  <br> il vous faudra  bids  </h5>
                            {{-- @endif --}}
                            {{-- @if (($articles->where('id', $article->id)->where('paquet_id', '==', Auth::user()->bideurs->first()->paquet_id)->first() == null) == 1) --}}
                            {{-- @endif --}}
                            <div class="block-power d-flex justify-content-center" >

                                {{-- wire:click.prevent()="sanction({{ $article->user->id}},{{$article->enchere->id}})" --}}

                            </div>
                            {{-- @endif --}}
                        @else
                            <h5> Vous n'etes pas connecté, voulez-vous vous connecter ?</h5>
                            <a type="button" href="/login" class="btn btn-ok">Connexion</a>

                        @endif
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                <a type="button" data-bs-dismiss="modal"  class="btn btn-ok">Acheter</a>
                </div>
            </div>
        </div>
    </div>
    {{-- modale_foudre --}}
    <div wire:ignore.self class="modal fade" id="option_foudre_{{$article->enchere?->pivotbideurenchere?->first()->enchere_id ?? ''}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">

                        @if (Auth::user())
                            {{-- @if ($liste->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->roi == 0 && $liste->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->foundre == 0 )
                                <h5> Pour bloquer  "{{ $liste->user->nom  }}" <br> il vous faut {{$liste->enchere->paquet->prix}} bids Pour acheter les options</h5>
                                <button type="button" class="btn btn-no" data-bs-dismiss="modal" wire:click.prevent()="option({{10}})"> Acheter</button>
                            @else --}}
                                <h5> Quel sentence voulez vous pour "foudre" <br> il vous faudra  bids</h5>
                            {{-- @endif --}}
                            {{-- @if (($articles->where('id', $article->id)->where('paquet_id', '==', Auth::user()->bideurs->first()->paquet_id)->first() == null) == 1) --}}
                            {{-- @endif --}}
                            <div class="block-power d-flex justify-content-center" >

                                {{-- wire:click.prevent()="sanction({{ $liste->user->id}},{{$liste->enchere->id}})" --}}

                            </div>
                        @else
                            <h5> Vous n'etes pas connecté, voulez-vous vous connecter ?</h5>
                            <a type="button" href="/login" class="btn btn-ok">Connexion</a>

                        @endif
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                <a type="button" data-bs-dismiss="modal"  class="btn btn-ok">Acheter</a>
                </div>
            </div>
        </div>
    </div>


    {{-- modale_click --}}
    <div wire:ignore.self class="modal fade" id="option_click_{{$article->enchere?->pivotbideurenchere?->first()->enchere_id ?? ''}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">

                        @if (Auth::user())
                            {{-- @if ($liste->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->roi == 0 && $liste->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->foundre == 0 )
                                <h5> Pour bloquer  "{{ $liste->user->nom  }}" <br> il vous faut {{$liste->enchere->paquet->prix}} bids Pour acheter les options</h5>
                                <button type="button" class="btn btn-no" data-bs-dismiss="modal" wire:click.prevent()="option({{10}})"> Acheter</button>
                            @else --}}
                                <h5> Quel sentence voulez vous pour "click" <br> il vous faudra  bids</h5>
                            {{-- @endif --}}
                            {{-- @if (($articles->where('id', $article->id)->where('paquet_id', '==', Auth::user()->bideurs->first()->paquet_id)->first() == null) == 1) --}}
                            {{-- @endif --}}
                            <div class="block-power d-flex justify-content-center" >

                                {{-- wire:click.prevent()="sanction({{ $liste->user->id}},{{$liste->enchere->id}})" --}}

                            </div>
                        @else
                            <h5> Vous n'etes pas connecté, voulez-vous vous connecter ?</h5>
                            <a type="button" href="/login" class="btn btn-ok">Connexion</a>

                        @endif
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button>
                <a type="button" data-bs-dismiss="modal"  class="btn btn-ok">Acheter</a>
                </div>
            </div>
        </div>
    </div>


    {{-- modale_bouclier --}}
    <div wire:ignore.self class="modal fade" id="option_bouclier_{{$article->enchere?->pivotbideurenchere?->first()->enchere_id ?? ''}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">

                        @if (Auth::user())
                            {{-- @if ($liste->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->roi == 0 && $liste->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->foundre == 0 )
                                <h5> Pour bloquer  "{{ $liste->user->nom  }}" <br> il vous faut {{$liste->enchere->paquet->prix}} bids Pour acheter les options</h5>
                                <button type="button" class="btn btn-no" data-bs-dismiss="modal" wire:click.prevent()="option({{10}})"> Acheter</button>
                            @else --}}
                                <h5> Quel sentence voulez vous pour "bouclier " <br> il vous faudra  bids</h5>

                            {{-- @endif --}}
                            {{-- @if (($articles->where('id', $article->id)->where('paquet_id', '==', Auth::user()->bideurs->first()->paquet_id)->first() == null) == 1) --}}
                            {{-- @endif --}}
                            <div class="block-power d-flex justify-content-center" >

                                {{-- wire:click.prevent()="sanction({{ $liste->user->id}},{{$liste->enchere->id}})" --}}

                            </div>
                        @else
                            <h5> Vous n'etes pas connecté, voulez-vous vous connecter ?</h5>
                            <a type="button" href="/login" class="btn btn-ok">Connexion</a>

                        @endif
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button>
                <a type="button" data-bs-dismiss="modal"  class="btn btn-ok">Acheter</a>
                </div>
            </div>
        </div>
    </div>

    {{-- modale_favoris--}}
    <div wire:ignore.self class="modal fade" id="favoris_{{$article->id ?? ''}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        @if (Auth::user())
                            {{-- @if ($liste->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->roi == 0 && $liste->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->foundre == 0 )
                                <h5> Pour bloquer  "{{ $liste->user->nom  }}" <br> il vous faut {{$liste->enchere->paquet->prix}} bids Pour acheter les options</h5>
                                <button type="button" class="btn btn-no" data-bs-dismiss="modal" wire:click.prevent()="option({{10}})"> Acheter</button>
                            @else --}}
                            <h5> Voulez-vous Acheter a cette enchere "{{$article->titre}} " <br> il vous faudra {{$article->paquet->prix}} bids </h5>
                        @else
                            <h5> Vous n'etes pas connecté, voulez-vous vous connecter ?</h5>
                        @endif
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between align-items-center">

                    <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                    <a type="button" href="/login" class="btn btn-ok">Connexion</a>
                </div>
            </div>
        </div>
    </div>
    
    @foreach ($articles as $key=> $article)
        <div wire:igniore.self class="modal fade" id="exampleModalCenter{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
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
    @endforeach
    @foreach ($salons as $key => $salon)
        {{-- modal participer --}}
        <div wire:ignore.self class="modal fade" id="modalEnchereSalon_{{ $key }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                en payent {{ $salon->montant }} bids.</p>
                            {{-- @endif --}}
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                            aria-label="close">Annuler</button>

                        @if (Auth::user() && Auth::user()->bideurs->first()->balance >= $salon->montant)
                            <a type="button"
                                href="{{ route('detail.article.salon', ['articleid' => $salon->article->id, 'salonid' => $salon->id, 'enchereid' => $salon->article->enchere->id, 'paquet' => $salon->article->paquet->id, 'name' => Str::slug($salon->article->titre)]) }}"
                                class="btn btn-ok">Accepter</a>
                        @elseif (Auth::user() && Auth::user()->bideurs->first()->balance < $salon->montant)
                            <a type="button" href="{{ route('clients.achat.bid') }}"
                                class="btn btn-ok">Accepter</a>
                        @else
                            <a type="button" href="/login" class="btn btn-ok">Accepter</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- modale annuler salon --}}
        <div wire:ignore.self class="modal fade" id="modalEnchereAnnuler_{{ $key }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                            <a type="button"
                                href="{{ route('annuler.salon', ['articleid' => $salon->id, 'enchereid' => $salon->article->enchere?->id, 'salon' => $salon->montant, 'name' => $salon->article?->titre]) }}"
                                class="btn btn-ok w-50 my-3 ">Oui</a>

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

