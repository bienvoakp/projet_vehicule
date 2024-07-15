@extends('layout')

@section('content')
    <h4 class="mt-5 mb-4 text-center">Toutes les catégories</h4>
    <div class="container">
        <div class="text-center">
            <a href=" {{route('categorie.create')}} "><button type="button" class="btn btn-success">Ajouter</button></a>


        </div>
    </div>

    <table class="table table-bordered text-center mt-3">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Nombre de voiture par catégorie</th>
                <th>Actions</th>
            </tr>

        </thead>

        <tbody>
            @foreach ($categories as $categorie )
            <tr>

                <td> {{ $categorie->nom }} </td>
                <td> Il y a {{ $categorie->voiture_count }} voiture(s) dans cette catégorie</td>
                <td>
                    <a href=" {{route('categorie.edit', ['categorie'=>$categorie->id])}}  "><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button></a>
                    <a href=" {{route('categorie.destroy', ['categorie'=>$categorie->id])}} "><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
