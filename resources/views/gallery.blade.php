@extends('layout')

@section('title', 'Galerie d\'images')

@section('content')
<div class="container">
    <h1>Galerie d'images</h1>

    <div class="row">
        @foreach ($images as $image)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img-top" alt="{{ $image->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $image->title }}</h5>
                    <form action="{{ route('gallery.destroy', $image->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <hr>

    <h2>Ajouter une image</h2>
    <form action="{{ route('gallery.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" required accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Télécharger</button>
    </form>
</div>
@endsection
