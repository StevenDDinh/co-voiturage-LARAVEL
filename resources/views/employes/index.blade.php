<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Liste des employés</h1>
    
    <table class='employes_table'>
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            {{-- <th>Action</th> --}}
        </thead>

        <tbody>
            @foreach ($employes as $employe)
                <tr>
                    <td>{{ $employe->nom }}</td>
                    <td>{{ $employe->prenom }}</td>
                    <td>{{ $employe->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>