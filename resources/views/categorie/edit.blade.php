@extends('layout')

@section('content')
    <div class="container text-center mt-5"><a href=" {{ route('categorie.index') }} "><button type="button"
                class="btn btn-success">Retour</button></a></div>

    <div class="container">
        @include('categorie.partials.formedition')

    </div>
@endsection
