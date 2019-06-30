@extends("layouts.app")

@section('title')
    Nome
@endsection

@section ('content')

    @if ( \Session::has('notification') )
        @include('includes.notification')
    @endif

    @include('start.includes.welcome')

    
@endsection
