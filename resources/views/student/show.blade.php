@extends('layout.front')

@section('main')

    <p>{{ $student->lastname }}</p>
    <a href="{{ route('student.index')}}">Retour</a>
    <a href="{{ route('student.edit',  [ $student ])}}">Editer l'étudiant</a>
    <form action="{{ route('student.destroy', [ 'student' => $student ]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>

    @if ($student->formation)

    <p>{{ $student->formation->name }}</p>
    <a href="{{ route('formations.show', [ 'formation' => $student->formation ]) }}">Voir la formation</a>
    @endif

    <hr>
    
   
    <a href="{{ route('groupes.index')}}">Voir la liste des groupes</a>



@endsection