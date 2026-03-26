<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Employe;

class VerifNbVoiture
{
    /**
     * Vérifie si l'employé a au moins une voiture, 
     * sinon redirige vers la page de création de voiture
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $employe=Employe::findOrfail($request->route('id'));
        
        if($employe->nbVoiture() == 0){
            return redirect()->route('voitures.create',['employe_id'=>$employe->id])
                ->with('error', 'Vous devez ajouter une voiture avant de voir les détails de l\'employé.');
        }
        return $next($request);
    }
}
