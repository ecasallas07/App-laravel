@extends('layouts.landing')

@section('title','services')


@section('content')
    <h1>services</h1>
    @component('_components.card')
        @slot('title','Service 1')
        @slot('content','lorem ipsum dolor sit amet')
    @endcomponent

    @component('_components.card')
        @slot('title','Service 3')
        @slot('content','lorem ipsum dolor sit amet')
            <h3>Hola mundo</h3>
    @endcomponent
@endsection