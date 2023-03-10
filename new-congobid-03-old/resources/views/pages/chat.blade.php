@extends('layouts.detail-profil')
@section('content')

{{-- @include('components.header-chat') --}}
<div class="chat-block">
    <div class="banner-sm">

        <div class="container-fluid">
            <div class="row">

                <div class="col-12 text-center">
                    <h1>Chat</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="chatbox">
            @livewire('content-chat')

        </div>
    </div>
</div>

@endsection
