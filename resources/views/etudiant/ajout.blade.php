@extends('template')
@section('contenu')
   {!! Form::open(['route' => 'etudiant.enregistrer']) !!}
        <div class="">
            {!! Form::label('nom', 'Nom:') !!}
            {!! Form::text('nom', null, ['class' => 'form-control']) !!}
        </div>

        <div class="">
            {!! Form::label('prenom', 'Prenom:') !!}
            {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
        </div>

        <div class="">
            {!! Form::label('sexe', 'Sexe:') !!}
            {!! Form::select('sexe', $sexes, null, ['class' => 'form-control', 'disabled', "id" =>"sexe"]) !!}
        </div>

        <div class="">
            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
        </div>
 
    {!! Form::close() !!}
@endsection