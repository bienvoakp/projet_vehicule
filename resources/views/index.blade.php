@extends('layout')

@section('title', 'Voiture de Luxe')

@section('content')

    @php
        use Carbon\Carbon;
        Carbon::setLocale('fr');
        $formattedDate = Carbon::parse($derniereVoiture->create_at)->translatedFormat('l,j F Y');
    @endphp

    <div class="container">

        <div class="h-100 w-100 d-flex justify-content-center align-items-center mt-5">
            <a href="{{ route('home') }}" class="link-dark">
                <div class="card">
                    {{-- <div class="card-body">
                        <a href=" {{ route('voiture.create') }} "><button type="button"
                                class="btn btn-success display-4">Accédez à l'application</button></a>
                    </div> --}}
                </div>
            </a>
        </div>

        <div class="mt-3" style="padding-bottom: 12rem">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body text-center">

                            <i class="fa-solid fa-calculator"></i>
                            <h5 class="card-title fst-italic">Total Voitures</h5>
                            <p class="card-text"> {{ $totalVoitures }} </p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-calculator"></i>
                            <h5 class="card-title fst-italic">Total Categories</h5>
                            <p class="card-text"> {{ $totalCategories }} </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="mt-3" style="padding-bottom: 12rem">
    <div class="row">
        {{-- <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dernière date de création</h5>
                    <p class="card-text"> {{ $voitures->nom }} </p>

                </div>
            </div>
        </div> --}}

        {{-- <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Dernière mise à jour</h5>
                    <p class="card-text"> {{ $derniereVoiture->updated_at->translatedFormat('l,j F Y') }} </p>
                </div>
            </div>
        </div>
    </div>
</div> --}}

        <div class="row">
            <div class="col-md-4">
                <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
                    <div class="card" style="width: 18rem; margin-top: -350px;">
                        @if ($derniereVoiture && $derniereVoiture->image)
                            <img class="card-img-top" src="{{ asset('storage/images/' . $derniereVoiture->image) }}"
                                alt="Image de la dernière voiture" style="max-height: 200px; object-fit: cover;">
                        @else
                            <img class="card-img-top" src="path/to/placeholder/image.jpg" alt="Aucune image disponible"
                                style="max-height: 200px; object-fit: cover;">
                        @endif


                        <div class=" container card-body">
                            <h5 class="card-title fst-italic">Dernière voiture ajoutée </h5>
                            <small> Ajouté le {{ $formattedDate }} </small>
                            <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item fw-bold"> {{ $derniereVoiture->nom }} </li>
                            <li class="list-group-item fw-bold"> {{ $derniereVoiture->marque }} </li>
                            {{-- <li class="list-group-item fw-bold">
                                {{ now()->year - $derniereVoiture->annee_fabrication }} ans</li> --}}
                            {{-- <li class="list-group-item fw-bold">Âge : {{ $derniereVoiture->created_at->diffForHumans()  }}</li> Pour donner la date de la dernière voiture créée --}}
                            <li class="list-group-item fw-bold">Catégorie : {{ $derniereVoiture->categorie->nom }} </li>
                        </ul>
                        <div class="card-body">
                            <p class="card-text text-center">
                                <a href=" {{ route('voiture.show', $derniereVoiture->id) }} "><button type="button"
                                        class="btn btn-success">Plus de Détails</button></a>
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection
