<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Employe;

class VerifEmployeHasCampuse
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $employe = Employe::findOrFail($request->route('id'));
        if($employe->campuses()->count()==0){
            return redirect()->route('employes.index')
                ->with('error', 'L\'employé n\'est associé à aucun campus. Vous ne pouvez pas accéder à cette page.');
        }
        return $next($request);
    }
}
