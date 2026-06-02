<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professor extends Model
{
    /** @use HasFactory<\Database\Factories\ProfessorFactory> */
    use HasFactory;

    protected $table = 'professors';

    protected $primaryKey = 'professor_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'specialization'
    ];
}
