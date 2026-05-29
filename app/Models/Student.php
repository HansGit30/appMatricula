<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    // Campos permitidos para guardar desde el formulario
    protected $fillable = [
        'name', 
        'last_name', 
        'birthdate', 
        'dni', 
        'address', 
        'phone', 
        'email', 
        'registration_status'
    ];

    // Relación con Registration (Un estudiante puede tener varias inscripciones)
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}