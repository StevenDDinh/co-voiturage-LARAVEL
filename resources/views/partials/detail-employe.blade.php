<section>
    <h3>Information principales de {{ $employe->nom }}</h3>

    <table class="detail_employe">
        <tr>
            <th>Nom</th>
            <td> {{$employe->nom}}</td>
        </tr>

        <tr>
            <th>Prénom</th>
            <td>{{$employe->prenom}}</td>
        </tr>

        <tr>
            <th>Email</th>
            <td>{{$employe->email}}</td>
        </tr>

        <tr>
            <th>NbVoiture</th>
            <td>{{$employe->NbVoiture()}}</td>
        </tr>
    </table>

</section>