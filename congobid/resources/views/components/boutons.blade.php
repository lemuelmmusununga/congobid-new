            <div class="card-footer">
                <div class="text-center d-flex justify-content-between">
                    <a href="{{ route('show.detail', ['id' => $article->id]) }}" class="btn-participer"><span class="iconify"
                            data-icon="akar-icons:plus"></span>Ouvrir l'enchere</a>

                @if (Auth::user() || (Auth::user() && !Auth::user()->pivotbideurenchere->where('enchere_id', $article->enchere->id)->first()))



                            <a href="#" class="btn-participer btn-gray" data-bs-toggle="modal"
                            data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify"
                                data-icon="akar-icons:plus"></span> Participer à l'enchère</a>

                @else

                    <a href="#" class="btn-participer" data-bs-toggle="modal"
                        data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify"
                            data-icon="akar-icons:plus"></span> Participer à l' enchère</a>

                @endif
            </div>
                <br>
                {{-- @if (!Auth::user() || (Auth::user() && !Auth::user()->pivotbideurenchere->where('enchere_id', $article->enchere->id)->first()))

                @endif --}}
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $article->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        <h5>Voulez-vous participer à cette enchère ?</h5>
                        @if (Auth::user())
                            <p> Pour y participer, veuillez souscrire à la catégorie "{{ $article->paquet->libelle }}" en
                                payent {{ $article->paquet->nombre_enchere }} bids.</p>
                        @endif
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                    <a type="button" href="/detail-enchere/{{ $article->id }}" class="btn btn-ok">Accepter</a>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="modalEnchereDetail_{{ $article->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        <h5>Enchère en attente</h5>
                        @if (Auth::user())
                            <p>Cette enchère va commencer le {{ $article->enchere->date_debut.' à '.$article->enchere->heure_debut }} </p>
                        @endif
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                    <a type="button" href="/detail-enchere/{{ $article->id }}" class="btn btn-ok">Accepter</a>
                </div>
            </div>
        </div>
    </div>
