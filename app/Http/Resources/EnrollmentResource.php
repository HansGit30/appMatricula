<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EnrollmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'              => $this->enrollment_id,
            'student_id'      => $this->student_id,
            'course_id'       => $this->course_id,
            'professor_id'    => $this->professor_id,
            'schedule_id'     => $this->schedule_id,
            'semester'        => $this->semester,
            'enrollment_date' => $this->enrollment_date,
            'final_grade'     => $this->final_grade,
            'status'          => $this->status,
            // Carga las relaciones anidadas condicionalmente para evitar el problema de consultas N+1
            // 'student'         => new StudentResource($this->whenLoaded('student')),
            // 'course'          => new CourseResource($this->whenLoaded('course')),
            // 'professor'       => new ProfessorResource($this->whenLoaded('professor')),
            // 'schedule'        => new SheduleResource($this->whenLoaded('schedule')),
            // 'created_at'      => $this->created_at,
            // 'updated_at'      => $this->updated_at,
        ];
    }
}
