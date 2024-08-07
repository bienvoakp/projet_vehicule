@extends('layout')

@section('content')
    <div class="container text-center mt-5"><a href="#"><button type="button"
                class="btn btn-primary">Ajouter une nouvelle marque</button></a></div>

    <div class="container">
        <form class="row g-3 mb-5" action="#" method="POST" enctype=multipart/form-data>
            <div class="col-12">
                @csrf
            </div>
            <div class="col-md-6">
                <div>
                    <label for="nom" name="nom" class="form-label">Nom</label>
                    <input id="nom" type="text" class="form-control" name="nom">
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>

    </div>
@endsection
