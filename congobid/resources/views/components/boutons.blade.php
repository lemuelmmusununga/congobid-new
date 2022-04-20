            <div class="card-footer">
                <div class="text-center d-flex justify-content-between">
                    <a href="{{ route('show.detail', ['id' => $article->id]) }}" class="btn-participer"><span class="iconify"
                            data-icon="akar-icons:plus"></span>Ouvrir l'enchere</a>
                @if ($article->enchere->pivotbideurenchere->first()->user_id == Auth::user()->id)
                    <button href="#" class="btn-participer btn-gray " style="border-radius: 10px;" disabled = "disabled" data-bs-toggle="modal"
                    data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify"
                        data-icon="akar-icons:plus"></span> Participer à l'enchère</button>
                @else
                    <a href="#" class="btn-participer" data-bs-toggle="modal"
                        data-bs-target="#modalEnchere_{{ $article->id }}"><span class="iconify"
                            data-icon="akar-icons:plus"></span> Participer à l' enchère</a>
                @endif
            </div>
                <br>

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
                    <a type="button" href="/detail-enchere/{{ $article->id }}" wire:click.prevent="participer({{Auth::user()->id}},{{$article->enchere->id}})" class="btn btn-ok">Accepter</a>
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
