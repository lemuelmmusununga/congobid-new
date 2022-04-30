@extends('layouts.app')
@section('content')

<div class="chat-block">
    <div class="block-title">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h2>Salon d'attente</h2>
        </div>
    </div>
    <div class="content-chat">
        <div class="container-fluid">
            <div class="row g-3">
                @foreach ($salons as $salon)
                    <div class="col-12 col-salon">
                        @if ($salon->pivotclientsalon->count() >= $salon->limite)
                            <a href="{{ route('show.detail', ['id' => $salon->article->id] ) }}"></a>
                        @else
                            <a href="#" class="btn-participer" data-bs-toggle="modal" data-bs-target="#modalEnchere">
                                <div class="card card-info-chat">
                                    <div class="content d-flex justify-content-star align-items-center">
                                        <div class="block-user d-flex justify-content-star align-items-center">
                                            <div class="block-avatar">
                                                <div class="icon"></div>
                                                <div class="avatar">
                                                    <img src="{{asset('images/articles/'.$salon->article->images[0]->lien) }}" alt="Image de l'article {{ $salon->article->titre }}">
                                                </div>
                                            </div>
                                            <div class="block-name-user">
                                                <h5>{{ $salon->article->titre }}</h5>
                                                <p> Prix CongoBid : {{ $salon->article->prix }}$ | Prix Kinshasa : <strike style="color: black;"> {{ $salon->article->prix_marche }}$ </strike> </p>
                                            </div>
                                            <div class="block-notif">
                                                <div class="date">
                                                    Participants
                                                </div>
                                                <div class="block-widget-notif">
                                                    <span class="num">{{ $salon->pivotclientsalon->count() }}</span>
                                                    <span class="num-total">/{{ $salon->limite }}</span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </a>

                        @endif

                    </div>
                    @endforeach

            </div>
        </div>
    </div>
</div>


    {{-- <div class="btn-float">
        <span class="iconify" data-icon="akar-icons:plus"></span>
    </div> --}}
{{-- modal --}}
<div wire:ignore.self class="modal fade" id="modalEnchere" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="icon">
                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                </div>
                <div class="text-center">
                    <h5>L'enchère est bloquée !</h5>
                    <p class="fw-bold"> Le nombre de participants n'a pas encore été atteint voulez-vous participer ? </p>

                </div>
                <div class="modal-footer d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-no" data-bs-dismiss="modal">Non</button>
                    <a href="{{route('detail.article.salon',['id'=>$salon->article->id,'name'=>$salon->article->titre,'salon'=>$salon->id])}}" type="button" data-bs-dismiss="modal"  class="btn btn-ok">Oui</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
