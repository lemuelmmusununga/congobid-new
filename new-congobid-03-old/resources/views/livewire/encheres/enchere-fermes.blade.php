<div>
    <div>

        <div class="wrapper">

            <div class="block-bid-home">
                <div class="text-center">
                    <h2>{{__('content.title-enchere-ferme')}}</h2>
                </div>

                <div class="container">
                    <div class="row g-2 mb-1">
                        @foreach ($articles as $article)
                            <div class="col-12 col-lg-4" id="{{$article->enchere->article->titre}} ">
                                    <div class="card px-1 {{ $article->state == 1 ? 'ok' : '' }}" id="">
                                        <div class="timeUpdate">
                                            <div class="text-center">
                                                <h6>Date</h6>
                                                <h6>{{ date('d-m-Y', strtotime($article->enchere->date_debut)).' à '.date('H:m', strtotime($article->enchere->date_debut)) }}</h6>
                                            </div>
                                        </div>

                                        <div class="container-fluid px-0">
                                            <div class="row">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="block-price">
                                                            <h6>Catégorie :
                                                                <span>{{ $article->enchere->paquet?->libelle ?? '' }}</span></h6>
                                                        </div>
                                                        <div class="block-price">
                                                            <h6>Prix CongoBid : <span>{{ $article->enchere->prix_enchere }}$</span></h6>
                                                            <h6> Prix marché : <span> <strike style="color: black;">
                                                                        {{ $article->enchere->article->prix_marche }}$ </strike> </span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        {{-- <img src="{{ asset('images/articles/'.($article->images == null ? null : $article->images[0]->lien) ) }}" alt="{{ $article->titre }}"> --}}
                                                        <img src="{{asset('images/articles/'.$article->enchere->article->images->first()->lien)}}" alt="img" class="w-100">

                                                    </div>
                                                </div>

                                                <span class="text-center">Code du retrait du Produit</span>
                                                <div class="col-12 justify-content-center">
                                                    <h3 class="text-center text-danger">{{ $article->enchere->article->code_produit }}</h3>
                                                </div>
                                            </div>
                                        </div>


                                        <h5 class="text-center mt-2">{{ $article->enchere->article->titre }}</h5>
                                        <h6 class="text-center">{{ $article->enchere->article->marque }}</h6>
                                        <span class="text-center">{{ Str::substr($article->enchere->article->description, 0, 80) }}...</span>
                                        <a href="{{route('show.detail.article',['id'=>$article->enchere->article->id,'name'=>$article->enchere->article->titre])}}" class="text-center d-block mb-3">Voir plus</a>

                                    </div>
                            </div>

                        @endforeach
                        {{-- <div class="block-pagination">
                            {{$articles->links()}}
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
