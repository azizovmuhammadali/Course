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
        Schema::create('active_students', function (Blueprint $table) {
            $table->id();
             $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_list_id')->constrained()->onDelete('cascade');
            $table->string('payment_amount');
            $table->string('lesson_paid');
            $table->string('lesson_passed');
            $table->string('lesson_debt_count');
            $table->string('lesson_debt_sum');
            $table->string('month');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('active_students');
    }
};
