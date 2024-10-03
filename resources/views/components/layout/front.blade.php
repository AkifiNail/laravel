<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title }} </title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('student.index')}}">Etudiants</a></li>
                <li><a href="{{ route('formations.index')}}">Formations</a></li>
                <li><a href="{{ route('groupes.index')}}">Groupes</a></li>
                <li><a href="{{ route('cours.index')}}">Corus</a></li>
            </ul>
        </nav>
    <header>
    <main>
       
        {{ $slot }}
    </main>
    <footer>
        <p>Footer</p>
    </footer>
    
</body>
</html>