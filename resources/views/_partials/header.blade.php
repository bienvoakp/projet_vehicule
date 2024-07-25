<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>Voiture de Luxe</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>
            <a href="{{ route('voiture.index') }}" class="nav-item nav-link">Nos voitures</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Création</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('voiture.create') }}" class="dropdown-item">Ajouter Voiture</a>
                    <a href="{{ route('categorie.create') }}" class="dropdown-item">Ajouter Catégorie</a>
                    <hr class="dropdown-divider">

                    <a href="{{ route('categorie.index') }}" class="dropdown-item">Liste des catégories</a>
                </div>
            </div>

        </div>

        <form class="d-flex ms-lg-3" role="search" action="{{ route('voiture.index') }}" method="GET">
            {{ csrf_field() }}
            <input class="form-control me-2" type="search" name="search" placeholder="Rechercher une voiture" aria-label="Search" value="{{ request('search') }}">
            <button class="btn btn-outline-light" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
        </form>


    </div>
</nav>

<!-- Carousel -->

