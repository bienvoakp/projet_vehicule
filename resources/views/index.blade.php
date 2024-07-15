@extends('layout')

@section('title', 'Voiture de Luxe')

@section('content')

<div class="h-100 w-100 d-flex justify-content-center align-items-center mt-5">
    <a href="{{ route('home') }}" class="link-dark">
        <div class="card">
            <div class="card-body">
                <h2><a href=" {{route('voiture.create')}} "> Accédez à l'application </a></h2>
            </div>
        </div>
    </a>
</div>

<div class="mt-3" style="padding-bottom: 12rem">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Voitures</h5>
                    <p class="card-text"> {{ $totalVoitures }} </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Categories</h5>
                    <p class="card-text"> {{ $totalCategories }} </p>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="mt-3" style="padding-bottom: 12rem">
    <div class="row">
        {{-- <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dernière date de création</h5>
                    <p class="card-text"> {{ $voitures->nom }} </p>

                </div>
            </div>
        </div> --}}

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Dernière mise à jour</h5>
                    <p class="card-text"> {{ $derniereVoiture->updated_at->translatedFormat('l,j F Y') }} </p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection












