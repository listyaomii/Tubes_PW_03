<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atma Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
      
        .navbar .nav-link {
            color: #000;
        }

        .navbar .nav-link.active {
            color: black;
            font-weight: bold;
        }

        .custom-navbar {
        background-color: #CDEDFF; /* Warna tomat */
        }

        .custom-navbar .navbar-nav .nav-link {
            color: black; /* Mengubah warna teks */
            font-weight: 100;
            
        }

        .navbar {
          background-color: #CDEDFF;
          margin-bottom: 0px;
        }

        body {
        font-family: 'Alegreya', serif;
        font-size: 20px;
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
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <i class="fas fa-plane-departure me-2"></i> Atma Ticket
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto">
                  <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                  <a class="nav-link" href="{{url('/tiket')}}">Tiket</a>
                  <a class="nav-link" href="{{url('/pesanan')}}">Pesanan</a>
                  <a class="nav-link" href="{{url('/profile')}}">Profile</a>
                  <a class="nav-link" href="#">Logout</a>
              </div>
          </div>
      </div>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imgs/carousel-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imgs/carousel-2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imgs/carousel-3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
</body>

<footer class="text-center text-muted" style="background-color: #FFFFFF; padding: 20px;">
  <p>&copy; Welcome to AtmaTicket and Enjoy your Flight.</p>
</footer>

</html>