@extends('layout')

@section('content')
    <div class="container">
        <h4 class="mt-5 mb-4">MODIFIER UN VEHICULE</h4>
        <form class="row g-3" action=" {{ route('voiture.update', ['voiture' => $voiture->id]) }}" method="post"
            enctype = "multipart/form-data">
            <div class="col-12">
                @csrf
            </div>
            <div class="col-md-6">
                <div>
                    <label for="nom" class="form-label">Nom du véhicule</label>
                    <input value = "{{ $voiture->nom }}" required id = "nom" type="text" class="form-control"
                        name = "nom">
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <label for="marque" class="form-label">Marque </label>
                    <input value = "{{ $voiture->marque }}" required id = "marque" type="text" class="form-control"
                        name = "marque">
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <label for="prix" class="form-label">Le prix</label>
                    <input value = "{{ $voiture->prix }}" required id = "prix" type="number" class="form-control"
                        name = "prix">
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <label for="date_achat" class="form-label">Date d'acquisition</label>
                    <input value = "{{ $voiture->date_achat }}" required id = "date_achat" type="date"
                        class="form-control" name= "date_achat">
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <label for="annee_fabrication" class="form-label">Année de fabrication</label>
                    <input value={{ $voiture->annee_fabrication }} required id = "annee_fabrication" type="number"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <label for="categorie_id" name="categorie_id" class="form-label">Catégorie du véhicule </label>
                    <select name="categorie_id" id="categorie_id" class="form-control">
                        <option selected value="" disabled selected>Sélectionnez une catégorie</option>
                        @foreach ($categories as $categorie)
                            <option value=" {{ $categorie->id }} "> {{ $categorie->nom }} </option>
                        @endforeach
                    </select>
                </div>


            </div>
            <div class="text-center form-group col-md-12">


                <label for="image" class="form-label">Changez l'image</label>
                <input id = "image" type="file" class="form-control" name ="image">
                @if ($voiture->image)
                    <img src="{{ asset('storage/images/' . $voiture->image) }}" alt="Nouvelle image"
                        style="max-width: 300px; margin-top: 10px;">
                @else
                    <p>Aucune image.</p>
                @endif

            </div>

            <div class="text-center form-group col-md-12">
                <label for="gallerie" class="form-label">Modifiez les images de la gallerie</label>
                <input id = "gallerie" type="file" class="form-control" name = "gallerie[]" multiple>
                @if ($voiture->gallerie)
                <div class="row mt-3">
                    @foreach (json_decode($voiture->gallerie) as $gallerieImage)
                        <div class="col-md-3">
                            <img src="{{ asset('storage/images/' . $gallerieImage) }}" alt="Image de la galerie" style="max-width: 100%; margin-top: 10px;">
                        </div>
                    @endforeach

                @else
                <p>Aucune image</p>

                @endif


            </div>
            <div class="col-12 mt-5">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
                <a href=" {{ route('voiture.index') }} "><button type="button" class="btn btn-warning">Voir </button></a>
            </div>


        </form>
    </div>
@endsection
