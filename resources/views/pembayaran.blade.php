<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Tiket</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

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
          background-color: #CDEDFF;
          font-size: 20px;
        }

        .full-width-image {
            width: 100%;
            height: auto;
        }

        .divider {
            height: 2px;
            background-color: white;
            margin: 10px 0;
        }
        .recommendation-card {
            border-radius: 50px;
            overflow: hidden;
            width:600px;
            height: 300px;
            margin-bottom: 50px;
        }

        .recommendation-card .card-img {
            object-fit: cover;
            height: 100%;
            filter: brightness(80%);
        }

        .recommendation-card:hover{
            transform: scale(1.03);
        }

        .card-img-overlay {
            color: white;
            background: rgba(0, 0, 0, 0.4); /* Overlay semi-transparan */
            border-radius: 20px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-price {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .arrow {
            font-size: 1.5rem;
            align-self: flex-end;
        }

        .form-container {
            width: 70%;
            position: absolute;
            top: 60%; /* Menempatkan form di tengah vertikal */
            left: 50%; /* Menempatkan form di tengah horizontal */
            transform: translate(-50%, -50%); /* Mengatur posisi form ke tengah */
            background-color: #CDEDFF; /* Warna latar belakang putih dengan transparansi */
            border-radius: 50px;
            padding: 30px; /* Padding untuk form */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Bayangan */
        }

        .btn{
            width:100px;
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
                  <a class="nav-link" href="{{url('/home')}}">Home</a>
                  <a class="nav-link active" aria-current="page" href="{{ url('/tiket') }}">Tiket</a>
                  <a class="nav-link" href="{{url('/pesanan')}}">Pesanan</a>
                  <a class="nav-link" href="{{url('/refund')}}">Refund</a>
                  <!-- <a class="nav-link" href="#">Login</a> -->
                  <a class="nav-link" href="{{url('/profile')}}"><i class="bi bi-person-fill"></i></a>
              </div>
          </div>
      </div>
    </nav>

    
</body>
</html>