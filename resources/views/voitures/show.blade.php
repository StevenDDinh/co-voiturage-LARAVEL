@extends('layouts.dashboard')

@section('titre-section')
    <h2> Employé / Voitures / Trajets / Campus </h2>
@endsection

@section('partie-haute')
    <section class="voiture_voiture">
        <h3>Voiture</h3><br>

        <p><strong>Modèle</strong> : {{ $voiture->modele }}</p>
        <p><strong>Nb Place</strong> : {{ $voiture->nb_places }}</p>
                
    </section>
@endsection

@section('partie-basse')
    <section class="voiture-detail-employe">
        <h3>Propriétaires</h3>
        @include('partials.detail-employe',[
            'employe'=>$voiture->employe
        ])
    </section>
@endsection