@extends('layout.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <section class="utama" id="utama">
        <div class="card mb-3">
            <img src="{{ asset('image/utama.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">Manchester United</h3>
              <p class="card-text">Manchester United adalah sebuah team sepak bola dari Kota Manchester, Inggris.</p>
              <p><strong>Cari tau lebih banyak Tentang Manchester United</strong></p>
              <a href="{{route('landing')}}" class="btn btn-primary">Go somewhere</a>
              
            </div>
          </div>
        
    </section>
</body>
</html>


@endsection