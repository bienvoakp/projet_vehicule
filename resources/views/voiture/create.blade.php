@extends('layout')

@section('content')
<div class="container">
    <h4 class="mt-5 mb-4">FORMULAIRE DE CREATION</h4>
</div>

<div class="container">
  <div class="col-md-4 ml-auto">
    <div class="text-start mt-2"><a href=" {{route('voiture.index')}} "><button type="button" class="btn btn-primary">Liste des véhicules</button></a></div>

  </div>
</div>

{{-- <div class="container text-center mt-4"><a href=" {{route('voiture.index')}} "><button type="button" class="btn btn-primary">Liste des véhicules</button></a></div> --}}


        <div class="container">
                <form class="row g-3 mt-3" action="{{ route('voiture.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="col-12">
                        @csrf
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label for="matricule" name="matricule" class="form-label">Matricule</label>
                            <input id="matricule" type="text" class="form-control" name="matricule">
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
                            <select name="categorie_id" id="categorie_id" class="form-control">
                                <option selected value="" disabled selected>Sélectionnez une catégorie</option>
                                @foreach ($categories as $categorie )
                                    <option value=" {{$categorie->id}} "> {{$categorie->nom}} </option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Les tags sont créés ici --}}

                    <div class="form-group ">
                        <label for="tags">Tags</label>
                        <input type="text" name="tags" id="tags" class="form-control">
                    </div>


                    <div class="text-center form-group col-md-12">
                            <label for="image" class="form-label">Insérez une image</label>
                            <input id = "image" type="file" class="form-control" name = "image">
                    </div>
                    <div class="text-center form-group col-md-12">
                            <label for="gallerie" class="form-label">Gallerie</label>
                            <input id = "gallerie" type="file" class="form-control" name = "gallerie[]" multiple>
                    </div>
                    <div class="container">
                        <div class="col-12 mb-4 mt-4">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="reset" class="btn btn-secondary">Annuler</button>
                        </div>

                    </div>
            </form>
    </div>

</div>



@endsection
