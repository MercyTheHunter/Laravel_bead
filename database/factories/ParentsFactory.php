<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parent>
 */
class ParentsFactory extends Factory
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
            "Telszam" =>'+36'.strval($this->faker->randomElement($array = array('20','30','70'))).strval($this->faker->numberBetween($min = 1000000, $max = 9999999)),
            "LoginID" => $this->faker->unique()->numberBetween($min = 21, $max = 70), //Login name starts with 'P'
        ];
    }
}
