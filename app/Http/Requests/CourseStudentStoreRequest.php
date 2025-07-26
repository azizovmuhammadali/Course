<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseStudentStoreRequest extends FormRequest
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
            'student_id' => 'required|exists:students,id',
            'course_list_id' => 'required|exists:course_lists,id',
            'teacher_id' => 'required|exists:teachers,id',
            'homework_status' => 'nullable|in:bajarilgan,bajarilmagan',
            'month' => 'required|string',
            'date_at' => 'required|date',
            'payment_status' => 'nullable|in:Tolangan,Tolanmagan',
        ];
    }
}
