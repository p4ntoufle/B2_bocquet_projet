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
    <h1>{{$voiture->plaque}}</h1>
    <p>{{$voiture->modele}} {{$voiture->marque}}</p>
    <p>{{$voiture->kilometrage}}</p>

<a href="/voiture" >Retour</a>
</body>
</html>
