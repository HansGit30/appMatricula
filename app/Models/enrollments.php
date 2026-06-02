<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollments extends Model
{
    /** @use HasFactory<\Database\Factories\EnrollmentsFactory> */
    use HasFactory;

    protected $table = 'enrollments';

    protected $primaryKey = 'enrollment_id';


    protected $fillable = [
        'student_id',    // Clave foránea hacia la tabla students
        'course_id',     // Clave foránea hacia la tabla courses
        'professor_id',  // Clave foránea opcional hacia la tabla professors
        'schedule_id',   // Clave foránea opcional hacia la tabla schedules
        'semester',
        'enrollment_date',
        'final_grade',
        'status'
    ];
}
