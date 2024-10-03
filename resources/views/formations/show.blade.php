@extends('layout.front')

@section('main')
    <h1>{{ $formation->name }}</h1>
    <a href="{{ route('formations.index' )}}">Retour</a>
    <a href="{{ route('formations.edit',  [ $formation ])}}">Editer la formation</a>
    <form action="{{ route('formations.destroy', [ 'formation' => $formation ]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>


@endsection