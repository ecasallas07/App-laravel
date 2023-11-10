@extends('layouts.app')

@section('content')
    <form action="{{ route('note.update', ['note' => $note->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $note->title }}">
        <label for="">Description</label>
        <input type="text" name="description" value="{{ $note->description }}">
        <label for="">Evento</label>
        <input type="text" name="evento" value="{{ $note->evento }}">

        <input type="submit" value="Update">

    </form>

@endsection