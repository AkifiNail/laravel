@extends('layout.front')

@section('main')

    <p>{{ $student->lastname }}</p>
    <a href="{{ route('student.index')}}">Retour</a>

    @can('update', $student)
    <a href="{{ route('student.edit',  [ $student ])}}">Editer l'étudiant</a>
    @endcan
    @can('destroy', $student)
    <form action="{{ route('student.destroy', [ 'student' => $student ]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
    @endcan
   
    <hr>

    @if ($student->formation)
    <h1>Formation associés</h1>

    <p>{{ $student->formation->name }}</p>
    <a href="{{ route('formations.show', [ 'formation' => $student->formation ]) }}">Voir la formation</a>
    @endif

    <hr>

    @if ($student->groupes)
    <h1>Groupes associés</h1>
    @foreach ($student->groupes as $groupe)
    <p>{{ $groupe->name }}</p>
        
    @endforeach

    @endif

    <hr>
    
   
    <a href="{{ route('groupe.index')}}">Voir la liste des groupes</a>



@endsection