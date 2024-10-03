@extends('layout.front')

@section('main')


<h1>editer un étudiant de {{ $student->lastname }}</h1>

<form method="POST" action="{{ route('student.update' , [ "student" => $student ])  }}">
    @csrf
    @method('PUT')
   
    <x-forms.input name="lastname" :value="$student->lastname" />
    <br>
    <x-forms.input name="firstname"  :value="$student->firstname" />
    <br>
    <x-forms.input name="email"  type="email" :value="$student->email" />
    <br>
    <x-forms.input name="number" type="number" :value="$student->number" />
    <br>
    <button type="submit">Modifier</button>
</form>

  


@endsection