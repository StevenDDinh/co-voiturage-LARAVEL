<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $fillable=['date_time_depart','date_time_arrivee','id_voiture','id_campuse_arrivee','id_campuse_depart'];

    public function campuseDepart(){
        return $this->belongsTo(Campuses::class,'id_campuse_depart');
    }

    public function campuseArrivee(){
        return $this->belongsTo(Campuses::class,'id_campuse_arrivee');
    }

    public function voiture(){
        return $this->belongsTo(Voitures::class,'id_voiture');
    }

    public function employes(){
        return $this->belongsToMany(Employes::class,"est_passagers","id_trajet","id_employe")
            ->withPivot("date_inscription");
    }
    
}
