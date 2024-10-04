@extends('layout.front')

@section('main')


<h1>Creer un étudiant</h1>

<form method="POST" action="{{ route('student.store') }}">
    @csrf
    
        <x-forms.input name="lastname" />
        <br>
    
    {{-- <label for="name">lastname</label>
    <input type="text" name="lastname" id="name" value="{{ old('lastname') }}">
    @error('lastname')
    <span style="display: block; color: red;">{{ $message }}</span>
    @enderror
    <br> --}}
    <label for="name">firstname</label>
    <input type="text" name="firstname" id="name" min="0" value="{{ old('firstname') }}">
    @error('firstname')
    <span style="display: block; color: red;">{{ $message }}</span>
    @enderror
    <br>
    <label for="name">email</label>
    <input type="email" name="email" id="name" min="0" value="{{ old('email') }}">
    @error('email')
    <span style="display: block; color: red;">{{ $message }}</span>
    @enderror
    <br>
    <label for="name">number</label>
    <input type="number" name="number" id="name" min="0" value="{{ old('number') }}">
    @error('number')
    <span style="display: block; color: red;">{{ $message }}</span>
    @enderror
    <br>
    <x-forms.select name="formation_id" >
        <option value="">Pas de formation</option>
        @foreach ($formations as $formation)
            <option value="{{ $formation->id }}"  @if (old("formation_id") == $formation->id) selected @endif>{{ $formation->name }}</option>
        @endforeach
    </x-forms.select>
    <p>
        <x-forms.checkboxes name="groupes" :options="$groupes->pluck('name', 'id')"/>
    </p>
    <button type="submit">Creer</button>
</form>

  


@endsection