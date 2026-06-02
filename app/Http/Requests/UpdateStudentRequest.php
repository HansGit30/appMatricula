<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
        $studentId = $this->route('student');

        return [
            'first_name'        => 'required|string|max:255',
            'last_name'         => 'required|string|max:255',
            'date_of_birth'     => 'required|date',
            'dni'               => 'required|string|max:8|unique:students,dni,' . $studentId . ',student_id', 
            'address'           => 'required|string|max:255',
            'phone_number'      => 'nullable|string|max:9',
            'email'             => 'required|string|max:255|unique:students,email,' . $studentId . ',student_id',
            'enrollment_status' => 'nullable|string|in:enrolled,inactive,suspended', // Restringe a estados válidos
        ];
    }
}
