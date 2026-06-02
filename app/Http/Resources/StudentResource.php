<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                => $this->student_id,
            'first_name'        => $this->first_name,
            'last_name'         => $this->last_name,
            'date_of_birth'     => $this->date_of_birth,
            'dni'               => $this->dni,
            'address'           => $this->address,
            'phone_number'      => $this->phone_number,
            'email'             => $this->email,
            'enrollment_status' => $this->enrollment_status,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
        ];
    }
}
