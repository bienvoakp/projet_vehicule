@extends('layout')

@section('content')

<div class="container text-center"><a href=" {{route('voiture.index')}} "> Liste des voitures </a></div>

<h4 class="mt-5 mb-4">Formulaire de création</h4>
    <form class="row g-3" action=" {{ route('voiture.store') }}" method="POST" enctype = multipart/form-data>
        <div class="col-12">
            @csrf
        </div>
        <div class="col-md-6">
            <div>
                <label for="nom" name="nom" class="form-label">Nom du véhicule</label>
                <input id="nom" type="text" class="form-control" name="nom">
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label for="marque" class="form-label" name = "marque">Marque </label>
                <input id = "marque" type="text" class="form-control" name = "marque">
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label for="prix" class="form-label" name="prix">Le prix (en euros)</label>
                <input id = "prix" type="number" class="form-control" name = "prix">
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label for="date_achat" class="form-label">Date d'acquisition</label>
                <input id = "date_achat" type="date" class="form-control" name= "date_achat" required>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label for="annee_fabrication" name= "annee_fabrication" class="form-label">Année de fabrication</label>
                <input id = "annee_fabrication" type="number" class="form-control" name = "annee_fabrication">
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label for="categorie_id" name="categorie_id" class="form-label">Catégorie du véhicule </label>
                <select name="categorie" id="categorie">
                    <option selected value="">Sélectionnez une catégorie</option>
                    @foreach ($categories as $categorie )
                        <option value=" {{$categorie->id}} "> {{$categorie->nom}} </option>

                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <button type="reset" class="btn btn-secondary">Annuler</button>
        </div>


</form>
</div>

@endsection
