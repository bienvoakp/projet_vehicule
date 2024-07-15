@extends('layout')

@section('content')
<div class="container text-center "><a href=" {{route('categorie.index')}} "><button type="button" class="btn btn-primary">Toutes les catégories</button></a></div>

<div class="container">


    <form class="row g-3" action=" {{ route('categorie.store') }}" method="POST" enctype = multipart/form-data>
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
