<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Employe::class;

    public function definition(): array
    {
        return [
            'nom'=> $this->faker->lastName(),
            'prenom'=>$this->faker->firstName(),
            'email'=>$this->faker->unique()->safeEmail()
        ];
    }
}
