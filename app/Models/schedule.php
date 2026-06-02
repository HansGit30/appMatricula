<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
    use HasFactory;


    protected $table = 'schedules';

    protected $primaryKey = 'schedule_id';

    protected $fillable = [
        'course_id', // Clave foránea hacia la tabla courses
        'day_of_week',
        'start_time',
        'end_time',
        'classroom'
    ];
}
