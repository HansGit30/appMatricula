<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEnrollmentRequest extends FormRequest
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
            'student_id'      => 'required|exists:students,student_id', // Valida existencia
            'course_id'       => 'required|exists:courses,course_id',   // Valida existencia
            'professor_id'    => 'nullable|exists:professors,professor_id', // Opcional pero debe existir si se envía
            'schedule_id'     => 'nullable|exists:schedules,schedule_id',   // Opcional pero debe existir si se envía
            'semester'        => 'required|string|max:20', // e.g., '2026-I'
            'enrollment_date' => 'required|date',
            'final_grade'     => 'nullable|numeric|between:0,20.00', // Asumiendo escala de 0 a 20 con decimales
            'status'          => 'nullable|string|in:enrolled,passed,failed,dropped',
        ];
    }
}
