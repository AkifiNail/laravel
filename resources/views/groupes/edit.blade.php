@extends('layout.front')

@section('main')


<h1>editer un étudiant de {{ $groupe->name }}</h1>

<form method="POST" action="{{ route('groupes.update' , [ "groupe" => $groupe ])  }}">
    @csrf
    @method('PUT')

    <x-forms.input name="name" :value="$groupe->name" />
    <br>
    <button type="submit"> Modifier </button>
</form>

