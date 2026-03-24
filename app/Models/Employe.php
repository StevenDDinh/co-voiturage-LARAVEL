<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use App\Models\Voitures;

class Employe extends Model
{
    use HasFactory;
    protected $fillable=["nom","prenom","email"];

    public function voitures(){
        return $this->hasMany(Voiture::class,"id_employe");
    }

    public function campuses(){
        return $this->belongsToMany(Campuse::class,"frequentes","id_employe","id_campuse");
    }

    public function trajets(){
        return $this->belongsToMany(Trajet::class,"est_passagers","id_employe","id_trajet")
            ->withPivot('date_inscription');
    }

    //compte le nombre de voiture que détient un employe
    public function nbVoiture(){
        return $this->voitures()->count();
    }
    
    //Vérifier si l’employé possède des véhicules appartenant à un modèle particulier (ex. : « Ferrari »)
    public function verifMarque($marqueVoiture){
        return $this->voitures()->where('modele','LIKE','%'.$marqueVoiture.'%')->exists();
    }

    // Retourner un statut à l’employé selon le nombre de véhicules qu’il possède
    public function returnStatut(){
        $variable = $this->nbVoiture();
        $status = "Pas conducteur";
        
        if ($variable == 1) {
            $status = "Conducteur";
        }
        elseif($variable>1){
            $status = "Conducteur très actif";
        }

        return $status;
    }
}
