
{{-- //extends se usa para traer layouts a vistas --}}
@extends('layouts.app')

@section('content')
<a href="{{ route('note.create') }}"> Create new note</a>
     <ul>

        {{-- {{ dd($notes)}} --}}
        {{-- //estructura que permite verificar si exsite data y a la vez recorre --}}
        @forelse ( $notes as $note )
            <li> <a href="{{ route('note.show',$note->id) }} ">{{ $note->title }}</a> | <a href="{{ route('note.edit',['note' => $note->id]) }}">Editar</a> |
                 <from action="{{ route('note.delete', $note->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </from></li>
        @empty
            <li>whiout data</li>    
        @endforelse
     </ul>
@endsection