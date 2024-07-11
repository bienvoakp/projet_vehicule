<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Voiture;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $voitures = Voiture::all();
        return view("voiture.index", [
            'voitures' => $voitures
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
        Voiture::create($request->all());
        return redirect()->route('voiture.index');
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
            'categorie' =>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        //
        return redirect()->route('voiture.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        //$voiture = Voiture::find($voiture);
        $voiture->delete();

        return redirect()->route('voiture.index');
    }
}
