<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $cour->name }}</h1>
    <a href="{{ route('cours.index' )}}">Retour</a>

    <p>Groupe : {{ $cour->groupe->name }}</p>
    <p>Formation : {{ $cour->formation->name }}</p>

    <p>Etudiants : </p>
    <ul>
        @if($cour->students()->isEmpty())
                        <p>Aucun étudiant trouvé pour ce cours.</p>
                    @else
                        @foreach($cour->students() as $student)
                            <li><a href="{{ route('student.show',['student' => $student]) }}">{{ $student->lastname }} {{ $student->firstnamename }}</a></li>
                        @endforeach
                    @endif
    </ul>


</body>
</html>