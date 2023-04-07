<div>
    @foreach ($articles as $key=> $article)
        <div wire:ignore class="modal fade" id="modalsalon{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('createSalon') }}" class="mb-5">
                            @csrf
                            <div class="form-group row g-3">
                                <div class="col-12">
                                    <div class="text-center">
                                        <h4 class="title-form mb-0">Ouvrir un Salon </h4>
                                        <p>de l'article {{ $article->titre}} {{ $count}}</p>
                                    </div>
                                </div>
                                {{-- <button wire:click='click()'>4</button> --}}
                                <div class="col-12">
                                    {{-- <input type="text" wire:model="getcount" class="form-control" name="participant" placeholder="Entrez le nombre de bideurs"> --}}
                                    <input type="text"  wire:model="getcount"  class="form-control" name="participant" placeholder="Entrez le nombre de bideurs">
                                    <input type="hidden" class="form-control" name="nombre" value="{{$article->prix}}" wire:model="prix" >
                                    <input type="hidden" class="form-control" name="articleid" value="{{$article->id}}">
                                    <input type="hidden" class="form-control" name="prix" value="{{$article->id}}">
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                    <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                    <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
