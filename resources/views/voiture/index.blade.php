@extends('layout')

@section('content')
<div class="container">
    <h4 class="mt-5 mb-4 text-center">Tous les véhicules</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Marque</th>
                <th>Prix</th>
                <th>Date d'acquisition</th>
                <th>Année de fabrication</th>
                <th>Catégorie</th>
            </tr>
            
        </thead>

        <tbody>
            @foreach ($voitures as $voiture )
            <tr>

            <td> {{ $voiture->nom }} </td>
            <td> {{ $voiture->marque }} </td>
            <td> {{ $voiture->prix }}  </td>
            <td>  {{ \Carbon\Carbon::parse($voiture->date_achat)->format('d-m-Y') }} </td>
            <td> {{ $voiture->annee_fabrication}} </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
