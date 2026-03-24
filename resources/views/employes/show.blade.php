@extends('layouts.dashboard')

    @section('titre-section')
        <h2> Employé / Voitures / Trajets / Campus </h2>
    @endsection

    @section('partie-haute')
        <h3> Profil Employé</h3>
        @include('partials.detail-employe',[
            'employe'=> $employe
        ])
    @endsection

    @section('partie-basse')
        <section class="employe_activite">
            <h3>Activité</h3>
            <p>
                Status : {{$employe->returnStatut()}}
            </p>
        </section>

        <section class="employe_voiture">
            <h3>Voiture</h3>
            
            @foreach ($employe->voitures as $voiture)
                <div>
                    <p>voiture {{$loop->iteration}}</p>
                    <a href="{{route('voitures.show',$voiture->id)}}">Voir</a>
                </div>
            @endforeach
            

        </section>
    @endsection
