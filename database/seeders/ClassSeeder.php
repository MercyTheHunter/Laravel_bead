<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array= array('a','b','c'); //The types of subclasses (a,b,c)
        for ($i=1; $i < 9; $i++) //The types of main classes (1-8)
        {
            for ($j=0; $j < 3; $j++) //The number of subclasses
            {
                DB::table('classes')->insert([
                    'Osztalynev' => $i.'.'.$array[$j],
                ]);
            }
        }
    }
}
