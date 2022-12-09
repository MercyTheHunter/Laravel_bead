<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "Nev" => $this->faker->randomElement($array = array('Angol','Német','Töri','Matek','Magyar','Tesi','Info')),
            "TeacherID" => $this->faker->unique()->numberBetween($min = 1, $max = 20),
        ];
    }
}
