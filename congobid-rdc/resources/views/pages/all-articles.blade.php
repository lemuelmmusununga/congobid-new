@extends('layouts.app')
@section('content')
    @livewire('articles.all-articles',['ids'=>$ids])
@endsection
