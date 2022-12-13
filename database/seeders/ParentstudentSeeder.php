<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParentstudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentnum = 300; //The number of students
        $parentnum = 200; //The number of parents
        $j=1;
        for ($i=1; $i < $studentnum; $i+=3) //1-1, 1-2, 2-1, 2-2, 3-1, 3-2, 4-3, 4-4, 5-3, 5-4, 6-3, 6-4...
        {
            DB::table('parentstudents')->insert([
                "StudentID" => $i,
                "ParentID" => $j,
            ]);
            DB::table('parentstudents')->insert([
                "StudentID" => $i,
                "ParentID" => $j+1,
            ]);
            DB::table('parentstudents')->insert([
                "StudentID" => $i+1,
                "ParentID" => $j,
            ]);
            DB::table('parentstudents')->insert([
                "StudentID" => $i+1,
                "ParentID" => $j+1,
            ]);
            DB::table('parentstudents')->insert([
                "StudentID" => $i+2,
                "ParentID" => $j,
            ]);
            DB::table('parentstudents')->insert([
                "StudentID" => $i+2,
                "ParentID" => $j+1,
            ]);
            $j+=2;
        }
    }
}
