<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://placeholder.pics/svg/150x50/888888/EEE/Logo" alt="..." height="36">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  ----------------------------
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



---------------------------------------------------------------------

<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href=" {{ route('home') }} ">
            <img src="{{ asset('storage/images/logo_rem.png') }}" alt="logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" {{ route('home') }} ">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('voiture.index') }}">Nos voitures <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Création
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href=" {{ route('voiture.create') }} ">Ajouter Voiture</a></li>
                        <li><a class="dropdown-item" href=" {{ route('categorie.create') }} ">Ajouter Catégorie</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href=" {{route('categorie.index')}} ">Liste des catégories</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <form class="d-flex" role="search" action="{{ route('voiture.index') }}" method="GET">
            {{ csrf_field() }}

            <input class="form-control me-2" type="search" name="search" placeholder="Rechercher une voiture" aria-label="Search" value="{{ request('search')}}">
            <button class="btn btn-outline-success" type="submit">Rechercher</button>
          </form>
    </div>
</nav>



