<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $table = 'students';

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'dni',
        'address',
        'phone_number',
        'email',
        'enrollment_status'
    ];
}
