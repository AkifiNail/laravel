@extends('layout.front')

@section('main')


<h1>editer une formation de {{ $formation->name }}</h1>

<form method="POST" action="{{ route('formations.update' , [ "formation" => $formation ])  }}">
    @csrf
    @method('PUT')
   
    <x-forms.input name="name" :value="$formation->name" />
    <br>
    <x-forms.input name="years" type="number" :value="$formation->years" />
    <br>
    <button type="submit">Modifier</button>
</form>

  


@endsection