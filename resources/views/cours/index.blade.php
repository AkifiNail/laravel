@extends('layout.front')

@section('main')

    <h1>Cours</h1>

    @auth
    <a href="{{ route('cours.create') }}">Crée un cour</a>
    @endauth

    <ul>
        @foreach ($cours as $cour)
        <li>{{ $cour->name }} </li>
        <li>Debut {{ $cour->debut->format('d/m/Y h:i ') }} </li>
        <li>fin {{ $cour->fin->format('d/m/Y h:i ') }} </li>

        <a href="{{ route('cours.show', [ $cour ]) }}">View</a>
        @endforeach

    </ul>


@endsection