<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campuse extends Model
{
    protected $fillable=["description","adresse","type"];
   
    public function employes(){
        return $this->hasMany(employes::class,"id_campuse");
    }

    public function trajets(){
        return $this->hasMany(trajets::class,"id_campuse");
    }
}
