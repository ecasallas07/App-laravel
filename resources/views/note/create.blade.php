@extends('layouts.app')

@section('content')

<a href="{{ route('note.index') }}"> Back now</a>
    <form action="{{ route('note.save') }}" method="POST">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title">

        <label for="">Description</label>
        <input type="text" name="description">

        <label for="">Evento</label>
        <input type="text" name="evento">

        <input type="text" name="done" value="TRUE">

        <input type="submit" value="Create Note">
        
    </form>
@endsection