<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
      <a class="navbar-brand" href=" {{route('home') }} "> Voiture de Luxe </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('voiture.index') }}">Nos voitures <span class="sr-only">(current)</span></a>
              </li>
              

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Création
            </a>
            <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('voiture.create') }}">Ajouter Véhicule</a></li>
              <li><a class="dropdown-item" href="{{ route('categorie.create') }}">Ajouter Catégorie</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </nav>


