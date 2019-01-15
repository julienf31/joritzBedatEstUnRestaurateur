@extends('style.theme')

@section('contenu')
    <form enctype="multipart/form-data" action="{{ route('recette.store') }}" method="POST" class="text-center border border-light p-5">
        @csrf
        <p class="h4 mb-4">Créer une recette</p>
        <input type="text" name="titre" id="titre" class="form-control mb-4" placeholder="Titre">
        <textarea type="text" name="description" id="description" class="form-control mb-4" placeholder="Description"></textarea>

        <select name="categorie" id="">
            <option value="" disabled selected>Choisis une catégorie</option>
            @foreach($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
            @endforeach
        </select>

        <select name="ingredients[]" multiple searchable="Search here..">
            <option value="" disabled selected>Salade ? Tomate ? Oignon ?</option>
            @foreach($ingredients as $ingredient)
                <option value="{{ $ingredient->id }}">{{ $ingredient->nom }}</option>
            @endforeach
        </select>
        <input type="file" multiple name="images[]"> Image(sssss)
        <button class="btn btn-info btn-block my-4" type="submit">Créer</button>
    </form>
@endsection