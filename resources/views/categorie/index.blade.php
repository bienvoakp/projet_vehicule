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
            </tr>

        </thead>

        <tbody>
            @foreach ($categories as $categorie )
            <tr>

            <td> {{ $categorie->nom }} </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
