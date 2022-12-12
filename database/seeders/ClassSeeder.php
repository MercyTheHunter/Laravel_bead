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
        $array= array('a','b','c');
        for ($i=1; $i < 9; $i++)
        {
            for ($j=0; $j < 3; $j++)
            {
                DB::table('classes')->insert([
                    'Nev' => $i.'.'.$array[$j],
                ]);
            }
        }
    }
}
