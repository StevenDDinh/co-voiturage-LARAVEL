<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/employes',[EmployeController::class,'index'])->name('employes.index');
Route::get('/employes/{id}', [EmployeController::class,'show'])->name('employes.show');
// Route::post('/employes',[EmployeController::class,'store'])->name('employes.store');
// Route::put('/employes/{id}',[EmployeController::class,'update'])->name('employes.update');
// Route::delete('/employes/{id}',[EmployeController::class,'destroy'])->name('employes.destroy');

//ou 
Route::resource('employes',EmployeController::class);


Route::resource('voitures',VoitureController::class);
Route::get('/voitures/{id}',[VoitureController::class,'showProprietaire'])->name('voitures.showProprietaire');
