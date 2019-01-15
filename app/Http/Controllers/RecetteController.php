<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Image;
use App\Ingredient;
use App\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recettes = Recette::all();

        return view('recette.liste', compact('recettes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $ingredients = Ingredient::all();

        return view('recette.creer', compact('categories','ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recette = new Recette();
        $recette->titre = $request->titre;
        $recette->description = $request->description;
        $recette->categorie = $request->categorie;
        $recette->save();

        foreach ($request->images as $image){
            $i = new Image();
            $i->recette_id = $recette->id;
            $i->url = substr($image->store('public/recettes/'.$recette->id), 7);
            $i->save();
        }
        $recette->ingredients()->sync($request->ingredients);

        return redirect(route('recette.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function show(Recette $recette)
    {
        return view('recette.voir', compact('recette'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function edit(Recette $recette)
    {
        return view('recette.modifier',compact('recette'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recette $recette)
    {
        $recette->update($request->only('titre','description'));
        return redirect(route('recette.show', $recette));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recette $recette)
    {
        //
    }
}
