@extends('style.theme')

@section('contenu')
    <form action="{{ route('recette.store') }}" method="POST" class="text-center border border-light p-5">
        @csrf
        <p class="h4 mb-4">Créer une recette</p>
        <input type="text" name="titre" id="titre" class="form-control mb-4" placeholder="Titre">
        <textarea type="text" name="description" id="description" class="form-control mb-4" placeholder="Description"></textarea>
        <button class="btn btn-info btn-block my-4" type="submit">Créer</button>
    </form>
@endsection