@extends('layouts.app')
@section('content')
    @livewire('index')

    <div class="modal-success show">
        <div class="over">

        </div>
        <div class="content-modal">
            <div class="close-modal-sm">

            </div>
            <div class="header">
                <div class="icon">
                    <div class="content-icon">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="text-center">
                    <h6>Success</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, tempore!</p>
                </div>
            </div>
        </div>
    </div>

@endsection

