<?php

namespace Database\Factories;

use App\Models\Trajet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Trajet>
 */
class TrajetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Trajet::class;
    public function definition(): array
    {
        return [
            'date_time_depart'=>$this->faker->dateTime(),
            'date_time_arrivee'=>$this->faker->dateTime(),
        ];
    }
}
