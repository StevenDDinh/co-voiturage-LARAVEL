<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employe;
use App\Models\Campuse;

class FrequenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employes = Employe::all();
        $campuses = Campuse::all();

        foreach ($employes as $employe) {
            $employe->campuses()->attach(
                $campuses->random(rand(0, 3))->pluck('id')->toArray()
            );
        }
    }
}
