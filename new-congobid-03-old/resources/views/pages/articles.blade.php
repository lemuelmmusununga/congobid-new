@extends('layouts.app-page')
@section('content')
<div class="block-page">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-12">
                <h4 class="text-center title">Catégories</h4>
            </div>
            <div class="col-12">
                    <div class="accordion accordion-lg" id="accordionExample">
                        @foreach ($categories as $key => $categorie)
                            @php
                            // recuperation des sous categories
                                $details = App\Models\Categorie :: where('categorie_id',$categorie->id)->get();
                            @endphp
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed btn-collapse-lg" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#phone_{{$key}}" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        {{ $categorie->libelle}}
                                    </button>
                                </h2>
                                <div id="phone_{{$key}}" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            @foreach ($paquets as $paquet)
                                                <li>
                                                    <a href="{{route('all.articles',['id'=>$categorie->id,'id_paquet'=>$paquet->id])}}">
                                                        <span>{{$paquet->libelle}}</span>
                                                        <span>({{$paquet->prix_intervalle}})</span>
                                                        <span></span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
