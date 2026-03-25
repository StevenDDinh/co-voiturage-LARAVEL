<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Employe;

class verifVoiture
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $id = $request->route('id');
        $employe=Employe::find($id);

        if($employe){
            if($employe->nbVoiture() == 0){
                return redirect()->route('voitures.create',['employe_id' => $id]);
            }
        }
        return $next($request);
    }
}
