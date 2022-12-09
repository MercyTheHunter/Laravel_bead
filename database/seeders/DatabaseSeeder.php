<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Generates 20 teachers - Modify UserFactory to 'T' !!!
        //\App\Models\User::factory()->count(20)->create();
        //\App\Models\Teacher::factory()->count(20)->create();

        // Generates 50 parents - Modify UserFactory to 'P' !!!
        //\App\Models\User::factory()->count(50)->create();
        //\App\Models\Parents::factory()->count(50)->create();

        // Generates 100 students - Modify UserFactory to 'S' !!!
        //\App\Models\Classes::factory()->count(24)->create(); // <--- Can be duplicates - NEED FIX -
        //\App\Models\User::factory()->count(100)->create();
        //\App\Models\Student::factory()->count(100)->create();

        \App\Models\Subject::factory()->count(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
