@extends('layout.front')

@section('main')
    <h1>{{ $formation->name }}</h1>
    <a href="{{ route('formations.index' )}}">Retour</a>


@endsection