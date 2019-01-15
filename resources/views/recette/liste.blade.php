@extends('style.theme')

@section('contenu')
    <a href="{{ route('recette.create') }}" class="btn btn-indigo btn-sm m-0">Creer</a>
    <table class="table table-striped table-responsive-md btn-table">
        <thead>
        <tr>
            <th>#</th>
            <th>titre</th>
            <th>description</th>
            <th>actions</th>
        </tr>
        </thead>

        <tbody>
        @foreach($recettes as $recette)
            <tr>
                <th scope="row">{{ $recette->id }}</th>
                <td>{{ $recette->titre }}</td>
                <td>{{ $recette->description }}</td>
                <td>
                    <a href="{{ route('recette.show',$recette) }}" class="btn btn-indigo btn-sm m-0">Voir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection