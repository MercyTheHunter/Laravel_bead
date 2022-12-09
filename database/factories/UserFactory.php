<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $name = $this->faker->randomElement($array = array('P','S','T')).strval($this->faker->numberBetween($min = 100, $max = 999)).$this->faker->randomLetter().$this->faker->randomLetter().$this->faker->randomLetter()->unique(),
            "email" => $name.'@suli.hu',
            "password" => $this->faker->password()->unique(), // password
            "remember_token" => Str::random(10),
        ];
    }

    public function defineTeacher()
    {
        return [
            "name" => 'T'.strval($this->faker->numberBetween($min = 100, $max = 999)).$this->faker->randomLetter().$this->faker->randomLetter().$this->faker->randomLetter()->unique(),
            "email" => $name.'@suli.hu',
            "password" => $this->faker->password()->unique(), // password
            "remember_token" => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
