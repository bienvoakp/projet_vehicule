-----------------------------------------------
Show
-----------------------------------------------

@php
    use Carbon\Carbon;
    Carbon::setLocale('fr');
    $formattedDate = Carbon::parse($voiture->date_achat)->translatedFormat('l,j F Y');
    $x = date('Y') - $voiture->annee_fabrication;
@endphp

<div class="container">
    <h2 class="mt-5 text-start "> Détails du véhicule </h2>

</div>

<div class="container text-start"><a href=" {{ route('voiture.index') }} "><button type="button"
            class="btn btn-success">Retour</button></a></div>

<p class="text-center">
<div class="container">
    <table class="table table-bordered table-responsive-md table-list">
        <tr>
            <td class="fw-bold">Nom </td>
            <td>Votre véhicule s'appelle {{ $voiture->nom }} </td>
        </tr>
        <tr>
            <td class="fw-bold">Catégorie </td>
            <td> {{ $voiture->categorie->nom }} </td>
        </tr>
        <tr>
            <td class="fw-bold">Marque </td>
            <td>La marque de votre voiture est {{ $voiture->marque }} </td>
        </tr>
        <tr>
            <td class="fw-bold">Prix (en euros) </td>
            <td>Votre véhicule coûte {{ $voiture->prix }} euros </td>
        </tr>
        <tr>
            <td class="fw-bold">Année de fabrication </td>
            <td>Votre véhicule a été fabriqué en {{ $voiture->annee_fabrication }} </td>
        </tr>
        <tr>
            <td class="fw-bold">Date d'acquisition </td>
            <td>
                Vous avez acheté le véhicule le {{ $formattedDate }}
            </td>
        </tr>

        <tr>
            <td class="fw-bold">Âge </td>
            <td>Votre véhicule a déjà {{ $x }} ans </td>
        </tr>

        <tr>
            <td>Tag</td>
            <td>
                @foreach ($voiture->tags as $tag)
                    <li>{{ $tag->name }} - Commentaire: {{ $tag->pivot->comment }}</li>
                @endforeach
            </td>
        </tr>

    </table>

</div>

<div class="container mt-3">
    <div class="col-md-6 text-center">
        <div class="mb-3">
            <img src="{{ asset('storage/images/' . $voiture->image) }}" alt="{{ $voiture->nom }}"
                style="max-width: 300px;">
            <p class="mb-3"> {{ $voiture->nom }} </p>

        </div>
    </div>

</div>

<div class="container">
    <h3 class="mt-4">Toutes les images de la voiture</h3>
</div>

<div class="container">
    <div class="row mt-3">
        @if ($voiture->gallerie)
            {{-- Pour mettre un tableau en chaine de caractère  --}}
            @foreach (json_decode($voiture->gallerie) as $image)
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/' . $image) }}" alt="Autres images"
                            style="max-width: 100%;">
                        <div class="card-body">
                            <p class="card-text text-center">Description</p>
                        </div>
                    </div>

                </div>
            @endforeach
        @else
            <p>Aucune image disponible.</p>
        @endif
    </div>


</div>



--------------------------------------------------

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">TOUTES LES VOITURES</h1>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <small>Description</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




-----------------------------------------------



<div class="container">
    <h4 class="mt-5 mb-4">FORMULAIRE DE CREATION</h4>
</div>

<div class="container">
    <div class="col-md-4 ml-auto">
        <div class="text-start mt-2"><a href=" {{ route('voiture.index') }} "><button type="button"
                    class="btn btn-primary">Liste des véhicules</button></a></div>

    </div>
</div>

{{-- <div class="container text-center mt-4"><a href=" {{route('voiture.index')}} "><button type="button" class="btn btn-primary">Liste des véhicules</button></a></div> --}}


<div class="container">
    <form class="row g-3 mt-3" action="{{ route('voiture.store') }}" method="POST" enctype="multipart/form-data">
        <div class="col-12">
            @csrf
        </div>
        <div class="col-md-6">
            <div>
                <label for="nom" name="nom" class="form-label">Nom du véhicule</label>
                <input id="nom" type="text" class="form-control" name="nom">
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label for="marque" class="form-label" name = "marque">Marque </label>
                <input id = "marque" type="text" class="form-control" name = "marque">
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label for="prix" class="form-label" name="prix">Le prix (en euros)</label>
                <input id = "prix" type="number" class="form-control" name = "prix">
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label for="date_achat" class="form-label">Date d'acquisition</label>
                <input id = "date_achat" type="date" class="form-control" name= "date_achat" required>
            </div>
        </div>


        <div class="col-md-6">
            <div>
                <label for="annee_fabrication" name= "annee_fabrication" class="form-label">Année de
                    fabrication</label>
                <input id = "annee_fabrication" type="number" class="form-control" name = "annee_fabrication">
            </div>
        </div>



        <div class="col-md-6">
            <div>
                <label for="categorie_id" name="categorie_id" class="form-label">Catégorie du véhicule </label>
                <select name="categorie_id" id="categorie_id" class="form-control">
                    <option selected value="" disabled selected>Sélectionnez une catégorie</option>
                    @foreach ($categories as $categorie)
                        <option value=" {{ $categorie->id }} "> {{ $categorie->nom }} </option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- Les tags sont créés ici --}}

        <div class="form-group ">
            <label for="tags">Tags</label>
            <textarea name="tags[]" id="tags" class="form-control" multiple>
                        </textarea>
        </div>


        <div class="text-center form-group col-md-12">
            <label for="image" class="form-label">Insérez une image</label>
            <input id = "image" type="file" class="form-control" name = "image">
        </div>
        <div class="text-center form-group col-md-12">
            <label for="gallerie" class="form-label">Gallerie</label>
            <input id = "gallerie" type="file" class="form-control" name = "gallerie[]" multiple>
        </div>
        <div class="container">
            <div class="col-12 mb-4 mt-4">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>

        </div>


    </form>
</div>

</div>
