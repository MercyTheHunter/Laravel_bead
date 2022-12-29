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
        $this->call([TeacherSeeder::class]); //20 users as 'teacher'
        \App\Models\Teacher::factory()->count(24)->create();
        $this->call([ParentSeeder::class]);  //200 users as 'parent'
        \App\Models\Parents::factory()->count(200)->create();
        $this->call([ClassSeeder::class]);
        $this->call([StudentSeeder::class]); //300 users as 'student'
        \App\Models\Student::factory()->count(300)->create();
        $this->call([SubjectSeeder::class]);
        $this->call([ParentstudentSeeder::class]);
        $this->call([LessonSeeder::class]);
        $this->call([DelaySeeder::class]);
        $this->call([GradeSeeder::class]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
