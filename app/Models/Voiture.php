<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable=['modele','nb_places'];

    public function employe(){
        return $this->hasOne(employes::class,'id_voiture');
    }
    public function trajets(){
        return $this->hasMany(trajets::class,"id_voiture");
    }
}
