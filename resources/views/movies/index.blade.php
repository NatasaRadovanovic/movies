<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    @foreach($movies as $movie)
        <p><a href='/movies/{{$movie->id}}'>{{ $movie->title }}</a><p>
        <p>{{ $movie->storyline }}</p>
        <hr></hr>
    @endforeach    
    

    
</body>
</html>