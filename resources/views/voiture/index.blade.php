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
    @if($voitures->isEmpty())
        <p>Pas de véhicules trouvés</p>
    @else
        <ul>
            @foreach($voitures as $voiture)
                <li>
                    <a href="{{route('voiture.show', $voiture->id)}}">{{$voiture->modele}} </a>
                    {{\Illuminate\Support\Str::limit($voiture->plaque, 4)}}
                    <form action="{{route('voiture.destroy', $voiture->id)}}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Supprimer cette voiture?')">Supprimer </button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
