@extends('layouts.app')

@section('content')
    <h1>Relation</h1>
    <div>
        <h2>{{ $user->name }} </h2>
        {{-- //De esta forma se accede a la relacion del usuario, phone es el n ombre de la relacion que esta en el modelo --}}
        {{-- <h2>{{ $user->phone->phone_number }}</h2> --}}
        {{-- <h2>{{ $user->phone->prefix }}</h2> --}}
    </div>

    @foreach ($user->phone as $phone)
        <ul>
            <li>{{ $phone->prefix }}</li>
            <li>{{ $phone->phone_number }}</li>
        </ul>
    @endforeach

    @foreach ($user->roles as $role)
        <ul>
            <li>{{ $role->name }}</li>
            <li>{{ $role->pivot->add_by }}</li>
        </ul>
    @endforeach
@endsection 