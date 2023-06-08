@extends('layouts.app-page')
@section('content')
<div class="block-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h4 class="text-center title">Notifications</h4>
          <div class="all-message">
            <input type="text" class="form-control" placeholder="Recherche">
            <div class="content-message">

                @if ($notifications == null)
                    <p class="text-center">Pas de notifications</p>
                @else
                    @foreach ($notifications as $notification)
                        <a href="#" class="link-message">
                            <div class="card-message">
                            <div class="row">
                                <div class="col-8">
                                <div class="block-info-message d-flex align-items-center">
                                    <div class="avatar">
                                    <img src="images/bg2.jpg" alt="">
                                    </div>
                                    <div class="text">
                                    <h6>{{$notification->user?->username}}</h6>
                                    <p>{{$notification->content}}</p>
                                    </div>
                                </div>
                                </div>
                                {{-- <div class="col-4 d-flex align-items-end" style="flex-direction: column;">
                                <div class="time">16h32</div>
                                <div class="indice">
                                    2
                                </div>
                                </div> --}}
                            </div>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
