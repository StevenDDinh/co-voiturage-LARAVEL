<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Affiche tous les employes
        $employes= Employe::all();
        // return $employes;
        return view('employes/index',compact('employes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_employe = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string'
        ]);

        Employe::create($new_employe);
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Affiche un employe selon son id
        $employe = Employe::findOrFail($id);
        return view('employes/show',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employe = $this->show($id);
        // $employe = Employe::findOrFail($id);

        $update_employe = $request->validate([
            'nom' => 'sometimes|string',
            'prenom' => 'sometimes|string',
            'email' => 'sometimes|string'
        ]);

        $employe->update($update_employe);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article=$this->show($id);
        $article->delete();
    }




}
