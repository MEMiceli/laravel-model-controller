<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>
<body>
    <h3><a href="{{route('homepage')}}">BACK</a></h3>
    <h1>Titolo{{$movie->title}}</h1>
    <h2>Voto{{$movie->vote}}</h2>
</body>
</html>