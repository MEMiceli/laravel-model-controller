<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moovies</title>
</head>
<body>
    <h1>Film</h1>
    <ul>
        @foreach ($movies as $movie)
            <li><a href="{{route('show',$movie->id)}}">{{$movie->title}}</a> <br> {{$movie->original_title}} <hr></li>
        @endforeach
        
    </ul>
    
</body>
</html>