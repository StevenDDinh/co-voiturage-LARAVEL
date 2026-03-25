@extends('layouts.dashboard')

{{-- titre --}}
@section('titre-section')
    <h2> Employé / Voitures / Trajets / Campus </h2><br>
@endsection

{{-- partie voitue --}}
@section('partie-haute')
    <section class="voiture_voiture">
        <h3>Voiture</h3>
        <p><strong>Modèle</strong> : {{ $voiture->modele }}</p>
        <p><strong>Nb Place</strong> : {{ $voiture->nb_places }}</p>
                
    </section><br>
@endsection

{{-- partie proprietaire --}}
@section('partie-basse')
    <section class="voiture-detail-employe">
        <h3>Propriétaires</h3>
        @include('partials.detail-employe',[
            'employe'=>$voiture->employe
        ])
    </section><br>
@endsection