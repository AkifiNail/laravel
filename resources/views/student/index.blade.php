<x-layout.front title=" pdsqdqdaul">

    @auth

    <a href="{{ route('student.create') }}">Ajouter un étudiant</a>

    @endauth

    <ul>
        @foreach ($students as $student)
        <li>{{ $student->lastname }} {{ $student->firstname }}</li>
        <a href="{{ route('student.show', [ $student ]) }}">View</a>
        @endforeach
    
    </ul>


</x-layout.front>


