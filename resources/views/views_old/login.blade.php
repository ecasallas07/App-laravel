
{{-- Siempre con el extends incluimos le layout a utilizar y con el section deifinimos los elementos yield del layout --}}
@extends('layouts.landing')
@section('title','Loguin')

{{-- //El section se usa cuando el elemento que traemos viene directamente de la carpeta creada layouts, se pone el titulo del yield  --}}
@section('content')
    <div>
        <h1>Ir a la pagina principal</h1>
        <a href="{{ route('home') }}">Ir a la pagina principal</a>
    </div>

    @component('_components.form')
        @slot('registro','Registrarse para nuevas credenciales')
        @slot('type','date')

    @endcomponent
@endsection