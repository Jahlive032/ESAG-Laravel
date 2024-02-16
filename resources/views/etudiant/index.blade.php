@extends('template')
@section('contenu')
    <h2>Etudiants</h2>

    <a href="{{ url('/ajout_etudiant') }}">Ajouter un étudiant</a>

    <table border="1">
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach ($etudiants as $etudiant)
            <tr>
                <th>{{$etudiant -> id}}</th>
                <th>{{$etudiant -> nom}}</th>
                <th>{{$etudiant -> prenom}}</th>
                <th>{{$etudiant -> sexes["libelle"]}}</th>
                <th><img src="{{ asset('image/b_edit.png')}}" alt=""></th>
                <th><img src="{{ asset('image/b_drop.png')}}" alt=""></th>
            </tr>
        @endforeach
    </table>
@endsection