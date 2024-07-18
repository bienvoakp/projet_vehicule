<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Categorie::withCount('voiture')->paginate(5);

        return view("categorie.index", compact('categories'));

        // $categories = Categorie::all();
        // return view("categorie.index", [
        //     'categories' => $categories
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Categorie::create($request->all());
        return redirect()->route('categorie.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
        return view('categorie.show', [
            'categorie' =>$categorie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //

        return view('categorie.edit', [
            'categorie' => $categorie
        ] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
        $categorie->update($request->all());

        return redirect()->route('categorie.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
        $categorie->delete();
        return redirect()->route('categorie.index');
    }
}
