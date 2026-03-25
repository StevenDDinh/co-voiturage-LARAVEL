<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title','Co-voiturage')</title>
</head>
<body>

    @include('partials.header')

    @yield('titre-section')

    @yield('partie-haute')

    @yield('partie-basse')

    @include('partials.footer')

</body>
</html>