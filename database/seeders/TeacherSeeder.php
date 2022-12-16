<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachernum = 20; //The number of teachers
        $faker = app(Generator::class);
        for ($i=0; $i < $teachernum; $i++)
        {
            $name = 'T'.strval($faker->numberBetween($min = 100, $max = 999)).$faker->randomLetter().$faker->randomLetter().$faker->randomLetter();
            $pswd = $faker->password();
            DB::table('users')->insert([
                "name" => $name,
                "email" => $name.'@suli.hu',
                "password" => $pswd,
            ]);
        }
    }
}
