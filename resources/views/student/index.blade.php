<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        @foreach ($students as $student)
        <li>{{ $student->lastname }} {{ $student->firstname }}</li>
        <a href="{{ route('student.show', [ $student ]) }}">View</a>
        @endforeach

    </ul>



</body>
</html>