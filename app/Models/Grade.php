<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    public function lessons()
    {
        return $this->belongstoMany(Lesson::class);
    }
    public function students()
    {
        return $this->belongstoMany(Student::class);
    }
}
