@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Editer une enchere </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                @livewire('admin.enchere.edit-enchere-form',['enchere'=>$enchere])
            </div>
        </div>
    </div>
    </div>


    @include('admin.layouts.partials.footer.footer')

@endsection

@section('javascript')
@endsection
