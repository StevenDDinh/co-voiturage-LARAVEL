<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Voiture;

class VisuBus
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $voiture = Voiture::findOrFail($request->route('id'));
        if($voiture->nb_places >=8){
            return redirect()->route('employes.show',['id'=>$voiture->employe->id])
                ->with('error', 'Visualisation des bus en cours');
        }
        return $next($request);
    }
}
