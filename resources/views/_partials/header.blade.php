<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm" style="background-color: #0C848F">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('storage/images/logo_rem.png') }}" alt="logo" height="50" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Accueil</a>
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
                        <li><a class="dropdown-item" href="{{ route('voiture.create') }}">Ajouter Voiture</a></li>
                        <li><a class="dropdown-item" href="{{ route('categorie.create') }}">Ajouter Catégorie</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('categorie.index') }}">Liste des catégories</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex ms-lg-3" role="search" action="{{ route('voiture.index') }}" method="GET">
                {{ csrf_field() }}
                <input class="form-control me-2" type="search" name="search" placeholder="Rechercher une voiture" aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-light" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>

