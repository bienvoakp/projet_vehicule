<form class="row g-3 mb-5" action=" {{ route('categorie.store') }}" method="POST" enctype=multipart/form-data>
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
