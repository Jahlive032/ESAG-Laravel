@extends('template')
@section('contenu')
    
    <form action="{{url('multiplication') }}" method="post" style="margin-top:-70px;">
        @csrf
        <label for="number">Entrez un nombre:</label>
        <input type="number" name="number" id="number">
        <button type="submit">Afficher la table de multiplication</button>
    </form>

    <div class="multiplication-table">
        <ul>
            @foreach($result as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endsection