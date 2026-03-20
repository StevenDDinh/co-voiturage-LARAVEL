<?php

namespace Database\Factories;

use App\Models\Voiture;
use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Voiture::class;
    public function definition(): array
    {
        return [
            'modele'=>$this->faker->word(),
            'nb_places'=>$this->faker->numberBetween(2,7),
            'id_employe'=>Employe::factory()
        ];
    }
}
