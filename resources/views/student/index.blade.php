<x-layout.front title=" pdsqdqdaul">

    <ul>
        @foreach ($students as $student)
        <li>{{ $student->lastname }} {{ $student->firstname }}</li>
        <a href="{{ route('student.show', [ $student ]) }}">View</a>
        @endforeach
    
    </ul>


</x-layout.front>


