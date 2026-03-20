<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $fillable=['date_time_depart','date_time_arrivee'];

    public function campuse(){
        return $this->hasOne(campuses::class,'id_trajet');
    }

    public function voiture(){
        return $this->hasOne(voitures::class,'id_trajet');
    }

    public function employes(){
        return $this->belongsToMany(employes::class,"est_passagers","id_trajet","id_employe")
            ->withPivot("date_inscription");
    }
    
}
