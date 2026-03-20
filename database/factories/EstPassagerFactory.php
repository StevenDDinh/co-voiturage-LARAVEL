<?php

namespace Database\Factories;

use App\Models\EstPassager;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EstPassager>
 */
class EstPassagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=EstPassager::class;
    public function definition(): array
    {
        return [
            'date_inscription'=>$this->faker->dateTime()
        ];
    }
}
