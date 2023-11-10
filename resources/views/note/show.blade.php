@extends('layouts.app')

@section('content')
    {{-- {{ dd($note) }} --}}
    @if(empty($note))
        <p>This note has not information</p>
    @else
        <h1>{{ $note->title }}</h1>
            <p>{{ $note->description }}</p>
            <h3>{{ $note->evento }}</h3>
    @endif

    <a href="{{ route('note.index') }}">Volver</a>
@endsection