@extends('layout')

@section('content')
<div class="container text-center">
    <a href=" {{route('voiture.create')}} "><button type="button" class="btn btn-primary">Ajouter un véhicule</button></a>
    <a href=" {{route('categorie.create')}} "><button type="button" class="btn btn-success">Ajouter une categorie</button></a>
    <h4 class="mt-5 mb-4 text-center">Tous les véhicules</h4>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Marque</th>
                <th>Image</th>
                <th>Actions</th>

            </tr>

        </thead>

        <tbody>
            @foreach ($voitures as $voiture )
            <tr>

            <td> {{ $voiture->nom }} </td>
            <td> {{ $voiture->marque }} </td>
            <td>
                @if ($voiture->image)
                <img src="{{ asset('storage/app/public/images/'.$voiture->image) }}" alt="{{ $voiture->nom }}" style="max-width: 100px">
                @else
                <p>Aucune image</p>
                @endif
            </td>
            <td>
                <a href=" {{route('voiture.show', ['voiture'=>$voiture->id])}} "><button type="button" class="btn btn-primary">Voir</button></a>
                <a href=" {{route('voiture.edit', ['voiture'=>$voiture->id])}}  "><button type="button" class="btn btn-warning">Modifier</button></a>
                <a href=" {{route('voiture.destroy', ['voiture'=>$voiture->id])}} "><button type="button" class="btn btn-danger">Supprimer</button></a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Ceci pour afficher les liens de pagination --}}
    {{ $voitures->links() }}

</div>

@endsection
