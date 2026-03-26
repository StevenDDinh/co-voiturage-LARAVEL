<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
use App\Models\Employe;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Voiture::all();
        return $voitures;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_voiture=$request->validate([
            'modele'=> 'required|string',
            'nb_places'=> 'required|numeric',
            'id_employe'=> 'required|exists:employes,id'
        ]);
        Voiture::create($new_voiture);
        return redirect()->route('employes.show', $request->id_employe)
                     ->with('success', 'Voiture ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $voiture = Voiture::findOrFail($id);
        // $employe = $voiture->employe);
        return view('voitures/show',compact('voiture'));
    }

    public function create(Request $request){
        $employe_id = $request->query('employe_id');
        return view('voitures/create',compact('employe_id'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $voiture = $this->show($id);

        $update_voiture=$request->validate([
            'modele'=> 'sometimes|string',
            'nb_places'=> 'sometimes|numeric',
            'id_employe'=> 'sometimes|exists:employes,id'
        ]);
        $voiture->update($update_voiture);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $voiture = $this->show($id);
        $voiture->delete();
    }

    /*
    *affiche le propriétaire de la voiture
    */
    public function showByIdProprietaire(string $id){
        $voiture = $this->show($id);
        return $voiture->employe;
    }

    // /*
    // * Vérifier si le proprietaire possede une marque passé en paramètre
    // */ 
    // public function possedeMarque($modele){
    //     $voiture = $this->show($id);
    // }
}
