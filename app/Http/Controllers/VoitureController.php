<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Voiture;
use Illuminate\Support\Facades\Storage;


class VoitureController extends Controller
{

    public function home()
    {
        $totalVoitures = Voiture::count();
        $totalCategories = Categorie::count();
        //  Ceci récupère la dernière voiture créée
        $derniereVoiture = Voiture::latest()->first();

        return view('index', [
            'totalVoitures' => $totalVoitures,
            'totalCategories' => $totalCategories,
            'derniereVoiture' => $derniereVoiture,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // Pour commencer à intégrer la logique de recherche, on commence par
        // créer une requête sur le modèle Voiture.

        $query = Voiture::query();

         // On vérifie si l'utilisateur a fait une requête de recherche et si c'est la cas,
        // On va récupérer le terme de recherche

        //dd("{$request->query('recherche')}");

        if ($request->filled('search')) {
            // Récupère le terme de recherche
            $search = $request->input('search');

            // On va ajouter des conditions de recherche à la requête
            $query->where('nom', 'like', "%{$search}%")
                ->orWhere('marque', 'like', "%{$search}%")
                ->orWhereHas('categorie', function ($q) use ($search) {
                    $q->where('nom', 'like', "%{$search}%");
                });
        }

        $voitures = $query->with('categorie')->paginate(5);


        // $voitures = Voiture::all();
        return view("voiture.index", [
            'voitures' => $voitures,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('voiture.create', [
            'categories' => $categories,
            'voiture' => new Voiture()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048'
        ]);

        $gallerie = null;

        if ($gallerieFiles = $request->file('gallerie')) {
            foreach ($gallerieFiles as  $gf) {
                $g = $gf->hashName();
                Storage::put('public/images', $gf);
                $gallerie[] = $g;
            }
            $gallerie = json_encode($gallerie);
        }

        $imageFile = $request->file('image');
        $image = $imageFile->hashName();
        Storage::put('public/images', $imageFile);


        Voiture::create([
            'nom' => $request->input('nom'),
            'marque' => $request->input('marque'),
            'prix' => $request->input('prix'),
            'date_achat' => $request->input('date_achat'),
            'annee_fabrication' => $request->input('annee_fabrication'),
            'categorie_id' => $request->input('categorie_id'),
            'image' => $image,
            'gallerie' => $gallerie
        ]);

        return redirect()->route('voiture.index')->with('success', 'Voiture ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Voiture $voiture)
    {
        //
        dd($request->all());
        $voiture->load('categorie');
        return view('voiture.show', [
            'voiture' => $voiture
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        //
        $categories = Categorie::all();
        return view('voiture.edit', [
            'voiture' => $voiture,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        //
        //  Je mets à jour la nouvelle image
        if ($request->hasFile('image')) {

            // Supprimer l'ancienne image
            if ($voiture->image) {
                Storage::delete('public/images/' . $voiture->image);
            }

            // Télécharge une nouvelle image
            $imageFile = $request->file('image');
            $image = $imageFile->hashName();
            Storage::put('public/images', $imageFile);
            $voiture->image = $image;
        }

        // Je m'occupe de la gallerie d'images ici
        if ($request->hasFile('gallerie')) {
            $gallerie = [];

            foreach ($request->file('gallerie') as $gf) {
                $g = $gf->hashName();
                Storage::put('public/images', $gf);
                $gallerie[] = $g;
            }
            // Je supprime les anciennes images de la gallerie
            if ($voiture->gallerie) {
                $oldGallerie = json_decode($voiture->gallerie);
                foreach ($oldGallerie as $oldImage) {
                    Storage::delete('public/images/' . $oldImage);
                }
            }

            $voiture->gallerie = json_encode($gallerie);
        }

        $voiture->update($request->except(['image', 'gallerie']));
        // $voiture->update($request->all());
        return redirect()->route('voiture.index')->with('success', 'Image modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        //$voiture = Voiture::find($voiture);

        $voiture->delete();
        return redirect()->route('voiture.index')->with('success', 'Véhicule supprimé.');
    }
}
