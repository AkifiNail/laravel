@extends('layout.front')

@section('main')

    <h1>Groupes</h1>

    <ul>
        @foreach ($groupes as $groupe)
        <li>{{ $groupe->name }}</li>
        <a href="{{ route('groupes.show', [ $groupe ]) }}">View</a>
        @endforeach

    </ul>


@endsection