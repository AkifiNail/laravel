@extends('layout.front')

@section('main')

    <h1>Groupes</h1>

    @auth
    <a href="{{ route('groupe.create') }}">Crée un groupe</a>
    @endauth
    @can('update', $groupes)
    <a href="{{ route('groupe.edit', [ $groupes ]) }}">Edit</a>
    @endcan

    <ul>
        @foreach ($groupes as $groupe)
        <li>{{ $groupe->name }}</li>
        <a href="{{ route('groupe.show', [ $groupe ]) }}">View</a>
        @endforeach

    </ul>


@endsection