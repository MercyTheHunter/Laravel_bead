<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Generator;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentnum = 300; //The number of teachers
        $faker = app(Generator::class);
        for ($i=0; $i < $studentnum; $i++)
        {
            $name = 'S'.strval($faker->numberBetween($min = 100, $max = 999)).$faker->randomLetter().$faker->randomLetter().$faker->randomLetter();
            $pswd = 'Fincsi!4';
            DB::table('users')->insert([
                "name" => $name,
                "email" => $name.'@suli.hu',
                "password" => Hash::make($pswd),
            ]);
        }
    }
}
