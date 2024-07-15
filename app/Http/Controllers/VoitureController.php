<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Voiture;

class VoitureController extends Controller
{

    public function home(){
         $totalVoitures = Voiture::count();
         $totalCategories = Categorie::count();
         $derniereVoiture = Voiture::latest()->first();

         return view('index', [
             'totalVoitures'=>$totalVoitures,
             'totalCategories' => $totalCategories,
             'derniereVoiture' => $derniereVoiture,
         ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures=Voiture::with('categorie')->paginate(5);

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
        //
        $request->validate(
            ['image'=>'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048'
    ]);
        $imageName = time()."-".$request->image->getClientOriginalName();
        $request->image->storeAs('storage/app/public/images', $imageName);

        //Creation de la voiture

        Voiture::create($request->all());
        return redirect()->route('voiture.index')->with('success', 'Voiture ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
        //

        $voiture->load('categorie');
        return view('voiture.show', [
            'voiture' =>$voiture
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
            'categories' =>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        //
        $voiture->update($request->all());
        return redirect()->route('voiture.index');
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
