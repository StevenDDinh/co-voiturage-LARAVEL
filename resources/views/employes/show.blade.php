@extends('layouts.dashboard')

    {{-- titre --}}
    @section('titre-section')
        <h2> Employé / Voitures / Trajets / Campus </h2><br>
    @endsection

    {{-- partie employe --}}
    @section('partie-haute')
        <h3> Profil Employé</h3>
        @include('partials.detail-employe',[
            'employe'=> $employe
        ])
        <br>
    @endsection

    {{-- partie voiture --}}
    @section('partie-basse')
        <section class="employe_activite">
            <h3>Activité</h3>
            <p>Status : {{$employe->returnStatut()}}</p>
        </section>

        <section class="employe_voiture">
            <h3>Voiture</h3>
            @if(session('success'))
                <div class="alert alert-success">
                    <h3 style="color:greenyellow;">{{ session('success') }}</h3>
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger">
                    <h3 style="color:red;">{{ session('error') }}</h3>
                </div>
            @endif

            {{-- barre de recherche --}}
            <form method="GET" action="{{ route('employes.show', $employe->id) }}" >
                <input type="text" name="search_model" placeholder="Modèle à chercher" required>
                
                <button type="submit">
                    Vérifier
                </button>

                <span>
                    @if(request()->has('search_model'))
                        {{ $employe->verifMarque(request('search_model')) ? 'YES' : 'NO' }}
                    @else
                        YES/NO
                    @endif
                </span>
            </form>

            {{-- liste des voitures --}}
            @foreach ($employe->voitures as $voiture)
                <div>
                    <p>voiture {{$loop->iteration}}</p>
                    <a href="{{route('voitures.show',$voiture->id)}}">Voir</a>
                </div>
                                
            @endforeach

            
        </section><br>
    @endsection
