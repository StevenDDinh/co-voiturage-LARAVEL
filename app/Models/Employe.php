<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;
    protected $fillable=["nom","prenom","email"];

    public function voitures(){
        return $this->hasMany(voitures::class,"id_employe");
    }

    public function campuses(){
        return $this->hasMany(campuses::class,"id_employe");
    }

    public function trajets(){
        return $this->belongsToMany(trajets::class,"est_passagers","id_employe","id_trajet")
            ->withPivot('date_inscription');
    }
}
