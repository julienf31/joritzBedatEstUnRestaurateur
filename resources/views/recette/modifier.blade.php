@extends('style.theme')

@section('contenu')
    <form action="{{ route('recette.update',$recette) }}" method="POST" class="text-center border border-light p-5">
        @csrf
        @method('PUT')
        <p class="h4 mb-4">Editer une recette</p>
        <input type="text" name="titre" id="titre" class="form-control mb-4" value="{{ $recette->titre }}">
        <textarea type="text" name="description" id="description" class="form-control mb-4" placeholder="Description">{{ $recette->description }}</textarea>
        <button class="btn btn-info btn-block my-4" type="submit">Créer</button>
    </form>
@endsection