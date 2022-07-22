@extends('layouts.app-chat')
@section('content')
{{-- @include('components.header-chat') --}}
<div class="chat-block">
    <div class="container-fluid">
        <div class="chatbox">
            @livewire('content-chat')

        </div>
    </div>
</div>

@endsection
