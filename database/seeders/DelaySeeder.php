<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class DelaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentnum = 300;
        $faker = app(Generator::class);
        for ($i=1; $i < $studentnum+1; $i++) //The types of main classes (1-8)
        {
            for ($j=0; $j < 5; $j++) //The number of subclasses
            {
                DB::table('classes')->insert([
                    'StudentID' => $i,
                    'LessonID' => $j,
                    'Mennyiseg' => $faker->numberBetween($min = 1, $max = 45),
                    'Datum' =>
                ]);
            }
        }
    }
}
