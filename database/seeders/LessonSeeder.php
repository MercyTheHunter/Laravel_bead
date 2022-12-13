<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Generator::class);
        $classnum = 24; //Number of classes
        $subjectnum = 40; //Number of subjects
        for ($i=1; $i < $classnum + 1; $i++) //Every class has 5 subjects, if a subject is not in this list then its not taught.
        {
            DB::table('lessons')->insert([
                "SubjectID" => $faker->numberBetween($min = 1, $max = 40),
                "ClassID" => $i,
            ]);
            DB::table('lessons')->insert([
                "SubjectID" => $faker->numberBetween($min = 1, $max = 40),
                "ClassID" => $i,
            ]);
            DB::table('lessons')->insert([
                "SubjectID" => $faker->numberBetween($min = 1, $max = 40),
                "ClassID" => $i,
            ]);
            DB::table('lessons')->insert([
                "SubjectID" => $faker->numberBetween($min = 1, $max = 40),
                "ClassID" => $i,
            ]);
            DB::table('lessons')->insert([
                "SubjectID" => $faker->numberBetween($min = 1, $max = 40),
                "ClassID" => $i,
            ]);
        }
    }
}
