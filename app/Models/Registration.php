<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', 
        'course_id', 
        'semester', 
        'final_grade', 
        'status'
    ];

    // Un registro pertenece a un estudiante
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Un registro pertenece a un curso
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}