<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VoitureController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('employes',EmployeController::class);
Route::resource('voitures',VoitureController::class);

Route::get('/employes/{id}', [EmployeController::class,'show'])
    ->middleware('has.voiture')
    ->name('employes.show');
    






