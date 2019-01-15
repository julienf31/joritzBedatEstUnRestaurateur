@extends('style.theme')

@section('contenu')
    Titre : {{ $recette->titre }}
    Description : {{ $recette->description }}
    <a href="{{ route('recette.edit', $recette) }}" class="btn btn-orange btn-sm m-0">Editer</a>
@endsection