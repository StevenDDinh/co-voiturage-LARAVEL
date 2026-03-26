<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campuse extends Model
{
    use HasFactory;
    protected $fillable=["description","adresse","type"];
   
    public function employes(){
        return $this->belongsToMany(Employe::class,"frequente","id_campuse","id_employe");
    }

    public function trajetArrivee(){
        return $this->hasMany(Trajet::class,"id_campuse_arrivee");
    }

    public function trajetDepart(){
        return $this->hasMany(Trajet::class,"id_campuse_depart");
    }
}
