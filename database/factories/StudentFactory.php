<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "Vnev" =>$this->faker->lastName(),
            "Knev" =>$this->faker->firstName(),
            'Szulhely' =>$this->faker->city(),
            'Szulido' =>$this->faker->dateTimeBetween($startDate = '-16 years', $endDate = 'now', $timezone = null),
            'Lakcim' =>$this->faker->address(),
            'ClassID'=>$this->faker->numberBetween($min = 1, $max = 24),
            'LoginID'=>$this->faker->unique()->numberBetween($min = 71, $max = 170),
        ];
    }
}
