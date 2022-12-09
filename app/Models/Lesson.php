<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public function subjects()
    {
        return $this->belongstoMany(Subject::class);
    }
    public function students()
    {
        return $this->belongstoOne(Student::class);
    }
    public function delays()
    {
        return $this->hasMany(Delay::class);
    }
}
