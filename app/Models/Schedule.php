<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id', 
        'day_week', 
        'start_time', 
        'end_time', 
        'classroom_id'
    ];

    // Relación: Un horario pertenece a un curso
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}