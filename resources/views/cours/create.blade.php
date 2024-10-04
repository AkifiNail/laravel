@extends('layout.front')

@section('main')


<h1>Creer un cours</h1>

<form method="POST" action="{{ route('cours.store') }}">
    @csrf
    
        <x-forms.input name="name" />
        <br>
        <x-forms.input name="debut" type="date" />
        <br>
        <x-forms.input name="fin" type="date" />
        <br>

        <x-forms.select name="formation_id" >
            <option value="">Pas de formation</option>
            @foreach ($formations as $formation)
                <option value="{{ $formation->id }}"  @if (old("formation_id") == $formation->id) selected @endif>{{ $formation->name }}</option>
            @endforeach
        </x-forms.select>
        <br>
        <x-forms.select name="groupe_id" >
            <option value="">Pas de formation</option>
            @foreach ($groupes as $groupe)
                <option value="{{ $groupe->id }}"  @if (old("groupe_id") == $groupe->id) selected @endif>{{ $groupe->name }}</option>
            @endforeach
        </x-forms.select>
        <button type="submit">Creer</button>
    

</form>

@endsection