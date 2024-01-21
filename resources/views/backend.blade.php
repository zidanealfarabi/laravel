
<!doctype html>
<html lang="en">

    <!-- HEADER -->
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="backend/css/dataTables.bootstrap5.min.css">

    <script src="backend/js/jquery-3.5.1.js"></script>
    <script src="backend/js/jquery.dataTables.min.js"></script>
    <script src="backend/js/dataTables.bootstrap5.min.js"></script>

    <title>Navbar Content</title>
  </head>

  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Application Development | </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="berita">berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kontak">kontak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile">profile</a>
            </li>
        </ul>
        </div>
        <div class="flex-shrink-0 dropdown">
            <a href="" class="btn btn-outline-light me-2">Logout</a>
    
        </div>
    </div>
</nav>

    <div class="container mt-5">
        
        <!-- CONTENT -->
        @yield('Content')

    </div>
    

    <!-- JS -->
    <script src="backend/js/popper.min.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>
   
  </body>
</html>
