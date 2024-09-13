<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>{{ $student->lastname }}</p>
    <a href="{{ route('student.index')}}">Retour</a>
    @if ($student->formation)

    <p>{{ $student->formation->name }}</p>
    <a href="{{ route('formations.show', [ 'formation' => $student->formation ]) }}">Voir la formation</a>
    @endif
    
</body>
</html>