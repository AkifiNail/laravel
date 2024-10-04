@extends('layout.front')

@section('main')


<h1>editer un étudiant de {{ $cour->name }}</h1>

<form method="POST" action="{{ route('cours.update' , [ "cour" => $cour ])  }}">
    @csrf
    @method('PUT')
   
    <x-forms.input name="name" :value="$cour->name" />
    <br>
    <x-forms.input name="debut" :value="old('debut', $cour->debut->format('Y-m-d'))" type="date" />
        <br>
        <x-forms.input name="fin" :value="old('fin', $cour->fin->format('Y-m-d'))" type="date" />        
    <br>
    <label>formation</label>
    <x-forms.select name="formation_id" >
        
        <option value="">Pas de formation</option>
     @foreach ($formations as $formation)
        <option value="{{ $formation->id }}"  
            @if (old('formation_id', $cour->formation_id) == $formation->id) selected @endif>
            {{ $formation->name }}
        </option>
    @endforeach
    </x-forms.select>
    <br>
    <label>groupe</label>
    <x-forms.select name="groupe_id" >
        <option value="">Pas de formation</option>
        @foreach ($groupes as $groupe)
        <option value="{{ $groupe->id }}"  
            @if (old('groupe_id', $cour->groupe_id) == $groupe->id) selected @endif>
            {{ $groupe->name }}
        </option>
    @endforeach
    </x-forms.select>
    <button type="submit">Modifier</button>
</form>

  


@endsection