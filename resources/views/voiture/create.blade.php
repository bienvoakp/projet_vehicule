@extends('layout')

@section('content')
    <div class="container">
        <h4 class="mt-5 mb-4">FORMULAIRE DE CREATION</h4>
    </div>

    <div class="container">
        <div class="col-md-4 ml-auto">
            <div class="text-start mt-2"><a href=" {{ route('voiture.index') }} "><button type="button"
                        class="btn btn-primary">Liste des véhicules</button></a></div>

        </div>
    </div>

    <div class="container">
        @include('voiture.partials.formcreation')
    </div>

    </div>
@endsection
