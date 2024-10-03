@extends('layout.front')

@section('main')


<h1>Creer une formation</h1>

<form method="POST" action="{{ route('formations.store') }}">
    @csrf
    @method("put")
   
    <label for="name">Nom</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">
    @error('name')
    <span style="display: block; color: red;">{{ $message }}</span>
    @enderror
    <label for="name">Years</label>
    <input type="number" name="years" id="name" min="0" value="{{ old('years') }}">
    @error('years')
    <span style="display: block; color: red;">{{ $message }}</span>
    @enderror
    <button type="submit">Creer</button>
</form>

  


@endsection