@extends('layouts.dashboard')

@section('partie-haute')
    <h1>Ajouter une voiture</h1>

    <form action="{{ route('voitures.store') }}" method="POST">
        @csrf
        <input type="hidden" name="employe_id" value="{{ $employe_id }}">
        <div>
            <label for="modele">Modèle:</label>
            <input type="text" id="modele" name="modele" required>
        </div>  
        <div>
            <label for="nbPlace">nombre de places:</label>
            <input type="number" id="nbPlace" name="nb_places" required>
        </div>
        <button type="submit">Ajouter la voiture</button>
    </form>


@endsection