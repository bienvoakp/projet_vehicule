<form class="row g-3" action=" {{route('categorie.update', ['categorie' => $categorie->id]) }}" method="post" enctype = multipart/form-data>
    <div class="col-12">
        @csrf
    </div>
    <div class="col-md-6">
        <div>
            <label for="nom" name="nom" class="form-label">Nom</label>
            <input value = "{{ $categorie->nom }}" id="nom" type="text" class="form-control" name="nom">
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Modifier</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
</form>
