@extends('layouts.app')
@section('content')
    <div class="modal fade" id="welcome-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col justify-content-center ">
                        <h2>Bienvenue sur CANGO BID</h2>
                        <p>
                            Nous sommes ravis de vous accueillir et de vous offrir la possibilité de participer
                            à des enchères passionnantes pour des produits uniques  et exclusifs.<br> Que vous soyez
                            un collectionneur chevronné ou un novice dans le monde des enchères, notre plateforme
                            est conçue pour vous offrir une expérience de première classe. <br> N'hésitez pas à parcourir
                            nos enchères en cours et à placer vos offres. Nous vous souhaitons
                            bonne chance et espérons que vous apprécierez votre expérience sur notre plateforme!"
                        </p>
                        <button class="btn btn-3d-rounded-sm btn-article" data-bs-dismiss="modal" aria-label="Close">Ok</button>
                    </div>
                </div>
            </div>
        </div>
      </div>



    {{-- @livewire('counterdown') --}}
    @livewire('index')
@endsection

