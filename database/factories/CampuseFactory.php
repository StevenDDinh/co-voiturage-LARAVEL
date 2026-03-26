<?php

namespace Database\Factories;

use App\Models\Campuse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Campuse>
 */
class CampuseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Campuse::class;

    public function definition(): array
    {
        return [
            'description'=>$this->faker->text(),
            'adresse'=>$this->faker->secondaryAddress(),
            'type'=>$this->faker->text()
        ];
    }
}
