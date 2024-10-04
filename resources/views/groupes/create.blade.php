@extends('layout.front')

@section('main')


<h1>Creer un groupe</h1>

<form method="POST" action="{{ route('groupe.store') }}">
    @csrf
    
        <x-forms.input name="name" />
        <br>
        <button type="submit">Creer</button>
    

</form>

@endsection