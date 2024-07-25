@extends('layout')

@section('content')
    @php
        use Carbon\Carbon;
        Carbon::setLocale('fr');
        $formattedDate = Carbon::parse($voiture->date_achat)->translatedFormat('l,j F Y');
        $x = date('Y') - $voiture->annee_fabrication;
    @endphp

    <div class="container">
        <h2 class="mt-5 text-start "> Détails du véhicule </h2>

    </div>

    <div class="container text-start"><a href=" {{ route('voiture.index') }} "><button type="button"
                class="btn btn-success">Retour</button></a></div>

    <p class="text-center">
    <div class="container">
        <table class="table table-bordered table-responsive-md table-list">
            <tr>
                <td class="fw-bold">Matricule </td>
                <td>{{ $voiture->matricule }} </td>
            </tr>
            <tr>
                <td class="fw-bold">Catégorie </td>
                <td> {{ $voiture->categorie->nom }} </td>
            </tr>
            <tr>
                <td class="fw-bold">Marque </td>
                <td>{{ $voiture->marque }} </td>
            </tr>
            <tr>
                <td class="fw-bold">Prix (en euros) </td>
                <td> {{ $voiture->prix }} </td>
            </tr>
            <tr>
                <td class="fw-bold">Année de fabrication </td>
                <td> {{ $voiture->annee_fabrication }} </td>
            </tr>
            <tr>
                <td class="fw-bold">Date d'acquisition </td>
                <td>
                    {{ $formattedDate }}
                </td>
            </tr>

            <tr>
                <td class="fw-bold">Âge </td>
                <td>{{ $x }} ans </td>
            </tr>

            <tr>
                <td>Tag</td>
                <td>
                    <ul class="list-unstyled">
                        @foreach ($voiture->tags as $tag)
                            <li>{{ $tag->name }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>

        </table>

    </div>

    {{-- <div class="container mt-3">
        <div class="col-lg-3 col-md-6 text-center">
            <div class="mb-3">
                <img src="{{ asset('storage/images/' . $voiture->image) }}" alt="{{ $voiture->matricule }}"
                    style="max-width: 300px;">
                <p class="mb-3"> {{ $voiture->matricule }} </p>

            </div>
        </div> --}}

    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">TOUTES LES IMAGES DE LA VOITURE</h1>
            </div>

            <div class="row g-4">
                @if ($voiture->gallerie)
                    {{-- Pour mettre un tableau en chaine de caractère  --}}
                    @foreach (json_decode($voiture->gallerie) as $image)
                        <div class="mx-auto overflow-hidden ratio-1x1 rounded-3" data-wow-delay="0.1s" style="height: 20rem;width: 20rem;">

                                    <img class="img-fluid h-100 object-fit-cover w-100" src="{{ asset('storage/images/' . $image) }}" alt="Autres images"
                                        style="">

                                {{-- <div class="bg-light text-center p-4">
                                    <small> {{ $voiture->matricule }} </small>
                                </div> --}}
                        </div>
                    @endforeach
                @else
                    <p>Aucune image disponible.</p>
                @endif
            </div>
        @endsection
