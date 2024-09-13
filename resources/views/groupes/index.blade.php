<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Groupes</h1>

    <ul>
        @foreach ($groupes as $groupe)
        <li>{{ $groupe->name }}</li>
        <a href="{{ route('groupes.show', [ $groupe ]) }}">View</a>
        @endforeach

    </ul>



</body>
</html>