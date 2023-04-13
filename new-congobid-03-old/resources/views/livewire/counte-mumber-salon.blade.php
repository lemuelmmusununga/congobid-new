<div>
    <form method="POST" action="{{ route('createSalon') }}" class="mb-5">
        @csrf
        <div class="form-group row g-3">
            <div class="col-12">
                <div class="text-center">
                    <h4 class="title-form mb-0">Pour ouvrir ce Salon </h4>
                    <p>de l'article {{ $article->titre}} il faudrait payer {{$count}} bids</p>
                </div>
            </div>
            {{-- <button wire:click='click()'>4</button> --}}
            <div class="col-12">
                {{-- <input type="text" wire:model="getcount" class="form-control" name="participant" placeholder="Entrez le nombre de bideurs"> --}}
                <input type="number"  wire:model="getcount"  class="form-control" name="participant" placeholder="Entrez le nombre de bideurs">
                <input type="hidden" class="form-control" name="nombre"  value="{{$article->prix}}" wire:model="prises">
                <input type="hidden"  wire:model="prises" value="{{$article->prix}}">
                <input type="hidden" class="form-control" name="articleid" value="{{$article->id}}">
                <input type="hidden" class="form-control" name="enchereid" value="{{$article->enchere->id}}">
            </div>
            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
            </div>
        </div>
    </form>
    
</div>
