<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Les voitures</h1>
    @foreach($voitures as $voiture)
        <div>
            <h2> {{$voiture->modele}} {{$voiture->marque}} </h2>
            <p> {{$voiture->plaque}} </p>
            <p> {{$voiture->kilometrage}} </p>
        </div>
    @endforeach
</body>
</html>
