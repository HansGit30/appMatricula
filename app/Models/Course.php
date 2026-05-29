<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'codigo_course', 
        'description', 
        'credits'
    ];

    // Relación: Un curso tiene muchos horarios
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}