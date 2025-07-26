<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseStudentUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'student_id' => 'nullable|exists:students,id',
            'course_list_id' => 'nullable|exists:course_lists,id',
            'teacher_id' => 'nullable|exists:teachers,id',
            'homework_status' => 'nullable|in:bajarilgan,bajarilmagan',
            'month' => 'nullable|string',
            'date_at' => 'nullable|date',
            'payment_status' => 'nullable|in:Tolangan,Tolanmagan',
        ];
    }
}
