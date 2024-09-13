<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formations</h1>

    <ul>
        @foreach ($formations as $formation)
        <li>{{ $formation->name }}</li>
        <a href="{{ route('formations.show', [ $formation ]) }}">View</a>
        @endforeach

    </ul>



</body>
</html>