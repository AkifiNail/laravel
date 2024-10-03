@extends('layout.front')

@section('main')

    <h1>{{ $groupe->name }}</h1>
    <a href="{{ route('groupes.index' )}}">Retour</a>

    @foreach ($groupe->groupes as $groupe)
    <p>{{ $groupe->name }}</p>
    @endforeach


@endsection