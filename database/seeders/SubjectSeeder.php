<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class SubjectSeeder extends Seeder
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
        for ($i=1; $i < $teachernum + 1; $i++)
        {
            for ($j=0; $j < 2; $j++) //The number of subjects a teacher teaches
            {
                $subject = $faker->randomElement($array = array('Angol','Német','Töri','Matek','Magyar','Tesi','Info'));
                DB::table('subjects')->insert([
                    "Nev" => $subject,
                    "TeacherID" => $i,
                ]);
            }
        }
    }
}
