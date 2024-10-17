<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atma Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>
        .custom-navbar {
        background-color: #CDEDFF; /* Warna tomat */
        }
        .custom-navbar .navbar-nav .nav-link {
            color: black; /* Mengubah warna teks */
            font-weight: 100;
            
        }
        body {
        font-family: 'Alegreya', serif;
        font-size: 20px;
      }

      .navbar {
            margin-bottom: 0px;
        }

        svg {
        display: block;
        width: 100%;
        height: auto;
        margin-top: -20px; /* Bisa disesuaikan */
    }
    </style>

</head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><strong>Atma Ticket</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="{{ url('/') }}"><strong><strong>Home</strong></strong></a>
        <a class="nav-link" href="{{ url('/tiket') }}">Tiket</a>
        <a class="nav-link" href="{{ url('/pesanan') }}">Pesanan</a>
        <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
        <a class="nav-link" href="{{ url('/login') }}">Login</a>
        <a class="nav-link" href="{{ url('/register') }}">Register</a>
      </div>
    </div>
  </div>
</nav>
<!-- end navbar -->

<!-- waves -->

<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#CDEDFF" fill-opacity="1" d="M0,64L60,80C120,96,240,128,360,149.3C480,171,600,181,720,170.7C840,160,960,128,1080,101.3C1200,75,1320,53,1380,42.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg> -->
  
<!-- end waves -->

<!-- carousel -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/carousel-1.jpg" class="d-block w-100" alt="harusnya gambar">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imgs/carousel-2.jpg" class="d-block w-100" alt="harusnya gambar">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imgs/carousel-3.jpg" class="d-block w-100" alt="harusnya gambar">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 <!-- end carousel -->
</body>

<footer class="text-center text-muted" style="background-color: #FFFFFF; padding: 20px;">
  <p>&copy; Welcome to AtmaTicket and Enjoy your Flight.</p>
</footer>
</html>