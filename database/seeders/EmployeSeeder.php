<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employe;
use App\Models\Voiture;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employe::factory()->count(10)->create()->each(function($employe){
            $nombreDeVoitures = rand(2,7);

            if($nombreDeVoitures>0){
                Voiture::factory()->count($nombreDeVoitures)
                    ->create();
            }
        });
    }
}
