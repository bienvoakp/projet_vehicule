<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href=" {{route('home') }} "> Voiture de Luxe </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Créer
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href=" {{ route('voiture.create') }} ">Voiture</a></li>
                  <li><a class="dropdown-item" href=" {{ route('categorie.create') }}  ">Catégorie</a></li>
                </ul>
              </li>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="text-center my-5 border b">
        <h3><a href="#"> Accédez à l'application</a></h3>
        </div>
      </div>

        @yield('content')

      <footer class="bg-body-tertiary text-dark mt-auto py-1">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h5></h5>
              <p></p>
            </div>
            <div class="col-md-4">
              <h5></h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white"></a></li>
                <li><a href="#" class="text-white"></a></li>
                <li><a href="#" class="text-white"></a></li>
                <li><a href="#" class="text-white"></a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5></h5>
              <p><i class="fa fa-map-marker"></i></p>
              <p><i class="fa fa-phone"></i></p>
              <p><i class="fa fa-envelope"></i></p>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col text-center">
              <a href="#" class="text-white mr-2"><i class="fa fa-facebook"></i></a>
              <a href="#" class="text-white mr-2"><i class="fa fa-twitter"></i></a>

            </div>
          </div>
          <div class="row mt-3">
            <div class="col text-center">
              <p>&copy; 2024, Voiture de Luxe, Tous droits réservés</p>
            </div>
          </div>
        </div>
      </footer>



      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
