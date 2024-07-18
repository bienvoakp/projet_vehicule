@extends('layout')

@section('content')

    @php
        use Carbon\Carbon;
        Carbon::setLocale('fr');
        $formattedDate = Carbon::parse($voiture->date_achat)->translatedFormat('l,j F Y');
        $x = date('Y') - $voiture->annee_fabrication;
    @endphp

    <div class="container">
        <h2 class="mt-3 text-start "> Détails du véhicule </h2>

    </div>

    <div class="container text-start"><a href=" {{ route('voiture.index') }} "><button type="button"
                class="btn btn-success">Retour</button></a></div>

    <p class="text-center">
        <div class="container">
            <table class="table table-bordered table-responsive-md table-list">
                <tr>
                    <td class="fw-bold">Nom </td>
                    <td>Votre véhicule s'appelle {{ $voiture->nom }} </td>
                </tr>
                <tr>
                    <td class="fw-bold">Catégorie </td>
                    <td> {{ $voiture->categorie->nom }} </td>
                </tr>
                <tr>
                    <td class="fw-bold">Marque </td>
                    <td>La marque de votre voiture est {{ $voiture->marque }} </td>
                </tr>
                <tr>
                    <td class="fw-bold">Prix (en euros) </td>
                    <td>Votre véhicule coûte {{ $voiture->prix }} euros </td>
                </tr>
                <tr>
                    <td class="fw-bold">Année de fabrication </td>
                    <td>Votre véhicule a été fabriqué en {{ $voiture->annee_fabrication }} </td>
                </tr>
                <tr>
                    <td class="fw-bold">Date d'acquisition </td>
                    <td>
                        Vous avez acheté le véhicule le {{ $formattedDate }}
                    </td>
                </tr>

                <tr>
                    <td class="fw-bold">Âge </td>
                    <td>Votre véhicule a déjà {{ $x }} ans </td>
                </tr>

            </table>

        </div>

    <div class="container mt-3">
        <div class="col-md-6 text-center">
            <div class="mb-3">
                <img src="{{ asset('storage/images/' . $voiture->image) }}" alt="{{ $voiture->nom }}"
                    style="max-width: 300px;">
                <p class="mb-3"> {{ $voiture->nom }} </p>

            </div>
        </div>

    </div>

    <div class="container">
        <h3 class="mt-4">Toutes les images de la voiture</h3>
    </div>

    <div class="container">
        <div class="row mt-3">
            @if ($voiture->gallerie)
            {{-- Pour mettre un tableau en chaine de caractère  --}}
                @foreach (json_decode($voiture->gallerie) as $image)
                    <div class="col mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/images/' . $image) }}" alt="Autres images" style="max-width: 100%;">
                            <div class="card-body">
                                <p class="card-text text-center">Description</p>
                            </div>
                        </div>

                    </div>
                @endforeach
            @else
                <p>Aucune image disponible.</p>
            @endif
        </div>
                </p>


    </div>



@endsection
