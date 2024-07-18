@extends('layout')

@section('content')
    <div class="container">
        <h4 class="mt-5 mb-4 text-start">TOUS LES VEHICULES</h4>
    </div>

    <div class="container text-start mt-5">
            <a href=" {{ route('voiture.create') }} "><button type="button" class="btn btn-primary">Ajouter un
                    véhicule</button></a>

            <a href=" {{ route('categorie.create') }} "><button type="button" class="btn btn-success">Ajouter une
                    categorie</button></a>

        <table class="table table-bordered text-center mt-5 table-list">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Marque</th>
                    <th>Image</th>
                    <th>Actions</th>

                </tr>

            </thead>

            <tbody>
                @foreach ($voitures as $voiture)
                    <tr>

                        <td> {{ $voiture->nom }} </td>
                        <td> {{ $voiture->marque }} </td>
                        <td>
                            <div class="mx-auto overflow-hidden ratio-1x1 rounded-3 card" style="height: 5rem;width: 5rem;">
                                @if ($voiture->image)
                                    <img src="{{ asset('storage/images/' . $voiture->image) }}" alt="Camry"
                                        style="" class="h-100 object-fit-cover w-100">
                                @else
                                    <div class="m-auto">Aucune image</div>
                                @endif
                            </div>

                        </td>
                        <td>
                            <a href=" {{ route('voiture.show', ['voiture' => $voiture->id]) }} "><button type="button"
                                    class="btn btn-success"><i class="fa-solid fa-eye"></i></button></a>
                            <a href=" {{ route('voiture.edit', ['voiture' => $voiture->id]) }}  "><button type="button"
                                    class="btn btn-warning"><i class="fa-solid fa-pen"></i></button></a>
                            <a href=" {{ route('voiture.destroy', ['voiture' => $voiture->id]) }} "><button type="button"
                                    class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- Ceci pour afficher les liens de pagination --}}
        {{ $voitures->links() }}

    </div>
@endsection
