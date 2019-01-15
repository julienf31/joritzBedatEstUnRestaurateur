@extends('style.theme')

@section('contenu')
    Titre : {{ $recette->titre }}
    Description : {{ $recette->description }}
    Ingrédients :
    @foreach($recette->ingredients as $ingredient)
        {{ $ingredient->nom }}
    @endforeach
    Categorie : {{ $recette->cat->nom }}

    @foreach($recette->images()->get() as $image)
        <img src="{{ asset('storage/'.$image->url) }}" alt="">
    @endforeach
    <a href="{{ route('recette.edit', $recette) }}" class="btn btn-orange btn-sm m-0">Editer</a>
@endsection