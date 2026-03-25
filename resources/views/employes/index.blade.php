@extends('layouts.dashboard')

    {{-- titre --}}
    @section('titre-section')
        <h1>Liste des employés</h1><br>
    @endsection
    
    @section('partie-haute')
    <table class='employes_table'>
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Action</th>
        </thead>

        <tbody>
            @foreach ($employes as $employe)
                <tr>
                    <td>{{ $employe->nom }}</td>
                    <td>{{ $employe->prenom }}</td>
                    <td>{{ $employe->email }}</td>
                    <td><a  href="{{route('employes.show',$employe->id)}}" class="btn btn-primary">Action</a></td>
                </tr>
            @endforeach
        </tbody>
    </table><br>
    @endsection