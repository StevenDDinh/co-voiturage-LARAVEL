<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\verifNbVoiture;
use App\Http\Middleware\verifEmployeHasCampuse;
use App\Http\Middleware\visuBus;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    // vérification du nombre de voiture d'un employé avant d'afficher les détails de l'employé
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'has.voiture'=> VerifNbVoiture::class
        ]);
    })

    // vérification de l'affectation d'un employé à un campus avant d'afficher les détails de l'employé
    ->withMiddleware(function(Middleware $middleware): void {
        $middleware->alias([
            'has.campuse'=> VerifEmployeHasCampuse::class
        ]);
    })

    // vérification du nombre de places d'une voiture avant d'afficher les détails de la voiture
    ->withMiddleware(function(Middleware $middleware): void {
        $middleware->alias([
            'nbPlaces.superieur.a.huit'=> VisuBus::class
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
