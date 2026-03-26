@extends('layouts.dashboard')

@section('partie-haute')
    <h1>Ajouter une voiture</h1>
    @if(session('error'))
        <div class="alert alert-danger">
            <h2 style="color: red;">{{ session('error') }}</h2>
        </div>
    @endif

    <form action="{{ route('voitures.store') }}" method="POST">
        @csrf
        <input type="hidden" name="id_employe" value="{{ $employe_id }}">
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

    <a href="{{route('employes.index')}}">Retour à la liste des employes</a>

@endsection