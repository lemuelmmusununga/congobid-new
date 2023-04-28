<div>
    <form method="POST" action="{{ route('createSalon') }}" class="mb-5">
        @csrf
        <div class="form-group row g-3">
            <div class="col-12">
                <div class="text-center">
                    <p class="title-form mb-0">Pour ouvrir le Salon de cet article,{{ $article->titre}}, </p>
                    <p>  chaque participant devra garantir et ensuite payer </p>
                    <h3>{{$count}} bids</h3>
                </div>
            </div>
            {{-- <button wire:click='click()'>4</button> --}}
            <div class="col-12">
                <label for="salon_type">Salon</label>
                <select name="salon_type" id="salon_type" class="form-control" wire:model="salon_type">
                    <option value="1">Public</option>
                    <option value="2">Privé</option>
                </select>
            </div>
            <div class="col-12">
                {{-- <input type="text" wire:model="getcount" class="form-control" name="participant" placeholder="Entrez le nombre de bideurs"> --}}
                <label for="participant">Nombre de Participant</label>
                <input type="number"  wire:model="getcount"  class="form-control" name="participant" placeholder="Entrez le nombre de bideurs">
                <input type="hidden" class="form-control" name="nombre" wire:model="count">
                <input type="hidden"  wire:model="prises" value="{{$article->prix}}">
                <input type="hidden" class="form-control" name="articleid" value="{{$article->id}}">
                <input type="hidden" class="form-control" name="enchereid" value="{{$article->enchere->id}}">
            </div>
            @if ($salon_type == "2")
                <div class="col-12" >
                    <label for="participants">Choisir Participants</label>
                    <select name="participants[]" id="participants" class="form-select">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}"> {{$user->username}} </option>
                        @endforeach
                    </select>
                </div>
            @endif
            <div class="col-12">
                <label for="time">Durée de l'enchère (en seconde)</label>
                <select name="time" id="time" class="form-control">
                    <option value="1" selected>15 minutes</option>
                    <option value="2">30 minutes</option>
                    <option value="3">45 minutes</option>
                    <option value="4">1 heure</option>
                    <option value="5">2 heures</option>
                </select>
            </div>
            <div class="col-12">
                <label for="participant">Date & Heure de l'enchère</label>
                <div class="row">
                    <input type="date" class="col-4 form-control m-2" name="date" id="date">
                    <input type="time" class="col-4 form-control m-2" name="heure" id="heure">
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            $('#participants').multiselect();
        });
    </script>
</div>
