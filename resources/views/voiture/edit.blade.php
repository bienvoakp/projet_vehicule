@extends('layout')


@section('page_title')
MODIFIER UN VEHICULE
@endsection

@section('actions')
<a href=" {{ route('voiture.index') }} "><button type="button" class="btn btn-warning">Voir </button></a>
@endsection


@section('content')
    <div class="container">

        @include('voiture.partials.formedition')

        @if ($voiture->gallerie)
            <div class="row mt-3">
                @foreach (json_decode($voiture->gallerie) as $gallerieImage)
                    <div class="col-md-3">
                        <img src="{{ asset('storage/images/' . $gallerieImage) }}" alt="Image de la galerie"
                            style="max-width: 100%; margin-top: 10px;">
                    </div>
                @endforeach
            @else
                <p>Aucune image</p>
        @endif

    </div>
@endsection
