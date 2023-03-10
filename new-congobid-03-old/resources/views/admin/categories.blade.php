@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    @include('admin.layouts.partials.body.categories.index')

@endsection

@section('javascript')
    @include('admin.layouts.partials.meta.datatables')
@endsection
