<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class GradeSeeder extends Seeder
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
        for ($i=1; $i < $studentnum+1; $i++)
        {
            $class = DB::table('students')->select('*')
                    ->join('classes', 'students.ClassID', '=', 'classes.ID')
                    ->where('students.ID', $i)->get();
            foreach ($class as $s)
            {
                $temp = $s->ClassID;
            }
            $min = ($temp-1)*25+1;
            $max = $min + 24;
            $lesson = $faker->numberBetween($min, $max);

            for ($j=0; $j < 5; $j++)
            {
                DB::table('grades')->insert([
                    'Idopont' => $faker->unique()->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
                    'StudentID' => $i,
                    'Jegy' => $faker->numberBetween($min = 1, $max = 5),
                    'LessonID' => $lesson,
                ]);
            }
        }
    }
}
