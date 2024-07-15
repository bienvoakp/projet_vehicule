@extends('layout')

@section('content')

        @php
        use Carbon\Carbon;
            Carbon::setLocale('fr');
            $formattedDate = Carbon::parse($voiture->date_achat)->translatedFormat('l,j F Y');
           $x = date('Y') - $voiture->annee_fabrication;
        @endphp

<h2 class="mt-3 text-center display-5 text-success "> Détails du véhicule </h2>
<div class="container text-center"><a href=" {{route('voiture.index')}} "><button type="button" class="btn btn-warning">Retour</button></a></div>

    <p class="text-center">
        <table class="table table-primary table-bordered table-responsive-md">
            <tr>
                <td class="fw-bold">Nom </td>
                <td>Votre véhicule s'appelle {{$voiture->nom }} </td>
            </tr>
            <tr>
                <td class="fw-bold">Catégorie </td>
                <td> {{$voiture->categorie->nom }} </td>
            </tr>
            <tr>
                <td class="fw-bold">Marque </td>
                <td>La marque de votre voiture est {{$voiture->marque }} </td>
            </tr>
            <tr>
                <td class="fw-bold">Prix (en euros) </td>
                <td>Votre véhicule coûte {{$voiture->prix }} euros </td>
            </tr>
            <tr>
                <td class="fw-bold">Année de fabrication </td>
                <td>Votre véhicule a été fabriqué en {{$voiture->annee_fabrication }} </td>
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


    </p>

@endsection
