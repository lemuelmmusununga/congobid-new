<div>
    <div>

        <div class="wrapper">

            <div class="block-bid-home">
                <div class="text-center">
                    <h2>{{ __('content.title-index') }} </h2>
                </div>
                <div class="container">
                    <div class="row g-4 mb-4">
                        @foreach ($articles as $article)
                            @php
                                if (Auth::user() && $articles != null) {
                                   $pivot =($article->enchere->pivotbideurenchere->where('enchere_id', $article->enchere->id)->where('user_id', Auth::user()->id)->first() ) ?? '';
                                    //$pivot =(App\Models\PivotBideurEnchere::where('enchere_id',$article->enchere->id)->where('user_id',Auth::user()->id)->first());
                                }
                                $prix_roi="";

                                // dd($article->enchere->pivotbideurenchere->where('enchere_id',$article->enchere->id)->first(),$pivot,$article->enchere->id);
                                // dd(date('d-m-Y', strtotime($article->enchere->date_debut)),now()->format('d-m-Y'),($article->enchere->state),$article->titre);
                            @endphp

                            {{-- @dump(($article->enchere->munite*60+$article->enchere->seconde >= 0) && (date('d-m-Y', strtotime($article->enchere->date_debut)) == now()->format('d-m-Y')) && (date('H:i:s',strtotime($article->enchere->date_debut)) <= now(' Africa/kinshasa')->format('H:i') )); --}}
                            @if ($article->enchere->munite * 60 + $article->enchere->seconde > 0 && $article->enchere->state == 0 &&
                                date('d-m-Y', strtotime($article->enchere->date_debut)) == now()->format('d-m-Y') &&
                                date('d-m-Y H:i',strtotime($article->enchere->date_debut)) <= now(' Africa/kinshasa')->format('d-m-Y H:i'))
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6" id="{{ $article->titre }} ">
                                    <div class="card" id="">
                                        <div class="timeUpdate">
                                            <div class="text-center">
                                                <h6 class="text-success">L'énchere a démarré</h6>
                                                </h6>
                                                <div class="text-center">
                                                    @livewire('decrematation', ['getart'=>$article->enchere->id])
                                                </div>
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
                                                    <img src="{{ asset('images/articles/' . $article->images->first()?->lien ?? '') }}"
                                                        alt="img" class="w-100">
                                                </div>
                                            </div>
                                        </div>
                                            @if (Auth::user())
                                                <div
                                                    class="block-statut {{ $article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first() != null ? 'active' : 'unactive' }} on">
                                                    <div class="statut">
                                                        <span class="blink"></span>
                                                    </div>
                                                </div>
                                            @endif
                                            <h5 class="text-center mt-2">{{ $article->titre }}</h5>
                                            <h6 class="text-center mt-1 marque">{{ $article->marque }}</h6>
                                            <span class="text-center">{{ Str::substr($article->description, 0, 80) }}...</span>
                                            <a href="{{ route('show.detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                                class="text-center d-block mb-3">Voir plus</a>
                                            @if (Auth::user())
                                                @include('components.outils')
                                            @endif
                                            {{-- @include('components.favoris-encours') --}}

                                            @include('components.boutons')
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        {{-- <div class="block-pagination">
                            {{ $articles->links() }}
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
