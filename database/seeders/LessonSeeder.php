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
        $days = array('Hétfő', 'Kedd', 'Szerda', 'Csütörtök', 'Péntek');
        $times = array('8:00 - 8:45', '9:00 - 9:45', '10:00 - 10:45', '11:00 - 11:45','12:00 - 12:45');
        for ($i=0; $i < $classnum; $i++) //Every class has 5 subjects, if a subject is not in this list then its not taught.
        {
            for ($j=0; $j < 5; $j++)
            {
                DB::table('lessons')->insert([
                    "SubjectID" => 5*$i+$j+1,
                    "LessonDay" => $days[$j],
                    "LessonTime" => $times[0],
                    "ClassID" => $i+1,
                ]);
                DB::table('lessons')->insert([
                    "SubjectID" => 5*$i+$j+1,
                    "LessonDay" => $days[$j],
                    "LessonTime" => $times[1],
                    "ClassID" => $i+1,
                ]);
                DB::table('lessons')->insert([
                    "SubjectID" => 5*$i+$j+1,
                    "LessonDay" => $days[$j],
                    "LessonTime" => $times[2],
                    "ClassID" => $i+1,
                ]);
                DB::table('lessons')->insert([
                    "SubjectID" => 5*$i+$j+1,
                    "LessonDay" => $days[$j],
                    "LessonTime" => $times[3],
                    "ClassID" => $i+1,
                ]);
                DB::table('lessons')->insert([
                    "SubjectID" => 5*$i+$j+1,
                    "LessonDay" => $days[$j],
                    "LessonTime" => $times[4],
                    "ClassID" => $i+1,
                ]);
            }
        }
    }
}
