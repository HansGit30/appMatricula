<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSheduleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'course_id'    => 'required|exists:courses,course_id', // Valida que el curso realmente exista en la BD
            'day_of_week'  => 'required|string|max:50',
            //'start_time'   => 'required|date_format:H:i', // Valida formato de hora de 24 horas (HH:MM)
            //'end_time'     => 'required|date_format:H:i|after:start_time', // La hora de fin debe ser posterior a la de inicio
            'start_time'   => 'required',
            'end_time'     => 'required|after:start_time',
            'classroom' => 'required|string|max:50',
        ];
    }
}
