@extends('layouts.app')
@section('content')

<div class="chat-block">
    <div class="banner-sm">

        <div class="container-fluid">
            <div class="row">

                <div class="col-12 text-center">
                    <h1>Notifications</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content-chat">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-12">
                    <div class="card card-content-nofications">
                        <div class="block-content-notification">
                            <div class="today">

                                <div class="card">
                                    <div class="content d-flex align-items-center">
                                        <div class="icon-info icon-sucess">
                                            <span class="iconify" data-icon="akar-icons:check"></span>
                                        </div>
                                        <div class="content-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, iste?</p>
                                        </div>
                                    </div>
                                    <div class="date">
                                        23min
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="content d-flex align-items-center">
                                        <div class="icon-info icon-danger">
                                            <span class="iconify" data-icon="iwwa:delete"></span>
                                        </div>
                                        <div class="content-text">
                                            <p>Vous avez été foudroyé par <span>John Doe</span></p>
                                        </div>
                                    </div>
                                    <div class="date">
                                        5min
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="content d-flex align-items-center">
                                        <div class="icon-info">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        <div class="content-text">
                                            <p><span>CongoBid</span> Vous informe que sa nouvelle plateforme est maintenant disponible</p>
                                        </div>
                                    </div>
                                    <div class="date">
                                        12:30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
