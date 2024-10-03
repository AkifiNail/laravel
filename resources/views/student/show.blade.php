@extends('layout.front')

@section('main')

    <p>{{ $student->lastname }}</p>
    <a href="{{ route('student.index')}}">Retour</a>*

    @if ($student->formation)

    <p>{{ $student->formation->name }}</p>
    <a href="{{ route('formations.show', [ 'formation' => $student->formation ]) }}">Voir la formation</a>
    @endif

    <hr>
    
   
    <a href="{{ route('groupes.index')}}">Voir la liste des groupes</a>


@endsection