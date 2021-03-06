@extends('layouts.app')
@section('content')

    <div class="wrapper">
        <div class="banner-sm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Nous Contacter</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-all-videos">
            <div class="container">
                <div class="row g-3 g-lg-5">
                    <div class="col-md-4"></div>

                    <div class="col-md-4">
                        <div class="card card-form">
                            @if (Session::has('danger'))
                                <div class="alert alert-danger">
                                    <span>{{Session::get('danger')}}</span>
                                </div>
                            @elseif(Session::has('success'))
                                <div class="alert alert-success">
                                    <span>{{Session::get('success')}}</span>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('contact.requette') }}">
                                @csrf
                                <!-- Name -->
                                <div class="form-group row g-3">
                                    <div class="col-12">
                                        <x-input placeholder="Entrez votre nom" id="nom" class="block mt-1 w-full form-control" type="text" name="nom" required autofocus />
                                    </div>
                                    <div class="col-12">
                                        <x-input placeholder="Entrez votre numero de telephone"  class="block mt-1 w-full form-control" type="telephone" name="telephone"  required autofocus />
                                    </div>

                                    <div class="col-12">
                                        <x-input placeholder="Email" id="mail" class="block mt-1 w-full form-control" type="email" name="email" required autofocus />
                                    </div>
                                    <div class="col-12">
                                        <textarea name="content" id="" cols="30" class="form-control" rows="10" aria-placeholder="messages"></textarea>
                                    </div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary btn-contact">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-logo-money" style="padding: 30px 0">
        <div class="container">
            <h5>Adresse : Colonel modjiba
                <br>+243 90 0090005
            </h5>

        </div>
    </div>
@endsection

