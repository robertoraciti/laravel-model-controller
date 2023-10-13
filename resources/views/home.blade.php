<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel-Model-Controller</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">

    <h1 class="my-5">Lista Film</h1>
    <div class="row g-3">
      @foreach ($movies as $movie)
      <div class="col-3">
        @if(isset($movie))
        <div class="card h-100" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
            <p class="card-subtitle mb-2">Titolo originale: {{ $movie->original_title }}</p>
            <p class="card-text">Nazionalita: {{ $movie->nationality }}</p>
            <p class="card-text">Data uscita: {{ $movie->date }}</p>
            <p class="card-text">Voto: {{ $movie->vote }}</p>
          </div>
        </div>
        @endif        
      </div>
        @endforeach
  
    </div>
  </div>
</body>
</html>