@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    @include('admin.layouts.partials.body.bideurs.index')

@endsection

@section('javascript')
    @include('admin.layouts.partials.meta.datatables')
@endsection
