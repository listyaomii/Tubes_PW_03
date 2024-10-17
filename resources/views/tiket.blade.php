<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

      .custom-container {
        width: 3000px; /* Set your desired width */
        margin: auto; /* Center the container */
        padding: 20px; /* Optional padding */
       height: 850px;
       background-color: #00779D;
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
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="{{ url('/tiket') }}"><strong><strong>Tiket</strong></strong></a>
                <a class="nav-link" href="{{ url('/pesanan') }}">Pesanan</a>
                <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                <a class="nav-link" href="{{ url('/login') }}">Login</a>
                <a class="nav-link" href="{{ url('/register') }}">Register</a>
            </div>
            </div>
          </div>
        </nav>
<!-- end navbar -->

<!-- container -->
<div class="custom-container">
    
</div>
 <!-- end container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

  <footer class="text-center text-muted" style="background-color: #FFFFFF; padding: 20px;">
  <p>&copy; Welcome to AtmaTicket and Enjoy your Flight.</p>
</footer>
</html>