<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentstudent extends Model
{
    use HasFactory;
    public function parents()
    {
        return $this->belongstoMany(Parent::class);
    }
    public function students()
    {
        return $this->belongstoMany(Student::class);
    }
}
