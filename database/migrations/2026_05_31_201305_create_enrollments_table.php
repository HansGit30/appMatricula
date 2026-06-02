<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id('enrollment_id');

            // Claves foráneas obligatorias de la relación muchos a muchos
            $table->foreignId('student_id')->constrained('students', 'student_id')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses', 'course_id')->onDelete('cascade');

            // Claves foráneas opcionales (nullable) que referencian a profesores y horarios
            $table->foreignId('professor_id')->nullable()->constrained('professors', 'professor_id')->onDelete('set null');
            $table->foreignId('schedule_id')->nullable()->constrained('schedules', 'schedule_id')->onDelete('set null');

            $table->string('semester'); // Periodo académico (e.g., "2026-I")
            $table->date('enrollment_date');
            $table->decimal('final_grade', 4, 2)->nullable(); // Control exacto de notas con decimales (e.g., 20.00 o 9.50)
            $table->string('status')->default('enrolled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
