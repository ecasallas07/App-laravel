@extends('layouts.app')

@section('content')
@if($errors->any())
<ul>
    @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
    @endforeach
</ul>    
@endif 
<a href="{{ route('note.index') }}"> Back now</a>
    <form action="{{ route('note.save') }}" method="POST">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" class="@error('title') danger @enderror"/>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="">Description</label>
        <input type="text" name="description" />
        @error('description')
            <p class="alert alert-danger">{{ $message}}</p>
        @enderror

        <label for="">Evento</label>
        <input type="text" name="evento" />

        <input type="text" name="done" value="TRUE" />

        <input type="submit" value="Create Note" />
        
    </form>
@endsection