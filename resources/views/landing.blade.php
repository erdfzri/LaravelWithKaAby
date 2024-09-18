@extends('layout.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <header>
    <h4>Manchester United menjuarai UCL sebanyak 3 kali</h4>

    <div class="card-container">
        <div class="card">
            <img src="{{ asset('image/1968.jpg') }}" class="card-img-top" alt="Example Image">
            <div class="card-body">
                <h5 class="card-title">1967-1968</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('image/1999.jpeg') }}" class="card-img-top" alt="Example Image">
            <div class="card-body">
                <h5 class="card-title">1998-1999</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('image/squad.jpeg') }}" class="card-img-top" alt="Example Image">
            <div class="card-body">
                <h5 class="card-title">2007-2008</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
            </div>
        </div>
    </div>
</header>

<section id="about">
  <h2>About Manchester United</h2>
  <p>
      Manchester United Football Club, sering disebut sebagai Manchester United atau MU, adalah klub sepak bola profesional yang berbasis di Old Trafford, Greater Manchester, Inggris. Didirikan pada tahun 1878 dengan nama awal Newton Heath LYR F.C., klub ini berganti nama menjadi Manchester United pada tahun 1902.
  </p>
  <h3>Our Mission</h3>
  <p>
      Misi kami adalah untuk memenangkan trofi domestik dan internasional sambil terus mempromosikan nilai-nilai olahraga yang adil dan integritas. Kami berkomitmen untuk memberikan hiburan berkualitas tinggi dan mempromosikan perkembangan pemain muda untuk masa depan yang cerah.
  </p>
  <h3>Our History</h3>
  <p>
      Manchester United adalah salah satu klub paling sukses dalam sejarah sepak bola Inggris dan Eropa. Klub ini telah memenangkan 20 gelar Liga Inggris, 12 Piala FA, 6 Piala Liga Inggris, dan 3 Liga Champions UEFA. Sejarah kami dipenuhi dengan momen-momen ikonik, termasuk kemenangan ganda Liga dan FA pada tahun 1994 dan 1996 serta kemenangan treble pada tahun 1999.
  </p>
  <h3>Our Achievements</h3>
  <div class="achievements">
      <div class="achievement">
          <h4>English Premier League Titles</h4>
          <p>20</p>
      </div>
      <div class="achievement">
          <h4>FA Cups</h4>
          <p>12</p>
      </div>
      <div class="achievement">
          <h4>UEFA Champions League Titles</h4>
          <p>3</p>
      </div>
  </div>
  <h3>Meet the Team</h3>
  <div class="team">
      <div class="team-member">
          <img src="{{ asset('image/eth.jpg') }}" alt="Manager Image">
          <h4>Erik ten Hag</h4>
          <p>Current Manager</p>
      </div>
      <!-- Add more team members or key figures if needed -->
  </div>
</section>

    
<section id="merchandise">
  <h2>Shop Manchester United Merchandise</h2>
  <div class="merchandise-container">
      <div class="merchandise-item">
          <img src="{{ asset('image/baju.jpg') }}" alt="Manchester United Jersey">
          <h3>Manchester United Jersey</h3>
          <p>$75.00</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
      </div>
      <div class="merchandise-item">
          <img src="{{ asset('image/hoodie.jpg') }}" alt="Manchester United Scarf">
          <h3>Manchester United Hoodie</h3>
          <p>$25.00</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
      </div>
      <div class="merchandise-item">
          <img src="{{ asset('image/topi.jpg') }}" alt="Manchester United Mug">
          <h3>Manchester United Hat</h3>
          <p>$15.00</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
      </div>
      <!-- Add more merchandise items as needed -->
  </div>
</section>

    
      <footer>
        <p>&copy; 2024 MyBrand. All rights reserved.</p>
      </footer>
    
</body>
</html>

@endsection