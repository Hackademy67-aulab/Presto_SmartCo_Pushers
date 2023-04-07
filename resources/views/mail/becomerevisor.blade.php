<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Un utente ha richiesto di lavorare con noi</h1>
        <p>Ecco i suoi dati:</p>
        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
        <p>Se vuoi renderlo revisore clicca qui:</p>
        <a href="{{route('makeRevisor', compact('user'))}}">Rendi revisore</a>
    </div>
</body>
</html>