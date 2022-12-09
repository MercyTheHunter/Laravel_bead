<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "Nev" => strval($this->faker->numberBetween($min = 1, $max = 8)).'.'.$this->faker->randomElement($array = array('a','b','c')), //- 1.a, 1.b, 1.c, 1.d, 1.e, 2.a ... 8.d, 8.e
        ];
    }
}
