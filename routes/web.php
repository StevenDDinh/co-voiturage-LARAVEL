<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VoitureController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voitures/{id}', [VoitureController::class,'show'])
    ->middleware('nbPlaces.superieur.a.huit')
    ->name('voitures.show')
    ->where('id', '[0-9]+');

Route::get('/employes/{id}', [EmployeController::class,'show'])
    ->middleware('has.voiture','has.campuse')
    ->name('employes.show')
    ->where('id', '[0-9]+');



Route::resource('employes',EmployeController::class);
Route::resource('voitures',VoitureController::class);








