@extends('layout.front')

@section('main')

    <h1>Formations</h1>
    @auth
    <a href="{{ route('formations.create') }}">Crée une formation</a>
        
    @endauth
    

    <ul>
        @foreach ($formations as $formation)
        <li>{{ $formation->name }}</li>
        <a href="{{ route('formations.show', [ 'formation' => $formation ]) }}">View</a>
       
        @endforeach

    </ul>

@endsection