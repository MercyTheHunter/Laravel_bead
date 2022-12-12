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

        // Generates 200 parents - Modify UserFactory to 'P' !!!
        //\App\Models\User::factory()->count(200)->create();
        //\App\Models\Parents::factory()->count(200)->create();

        // Generates 300 students - Modify UserFactory to 'S' !!!
        //$this->call([ClassSeeder::class]);
        //\App\Models\User::factory()->count(300)->create();
        //\App\Models\Student::factory()->count(300)->create();

        //$this->call([SubjectSeeder::class]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
