<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActiveStudentUpdateRequest extends FormRequest
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
            'payment_amount' => 'nullable|numeric',
            'lesson_paid' => 'nullable|numeric',
            'lesson_passed' => 'nullable|numeric',
            'lesson_debt_count' => 'nullable|numeric',
            'lesson_debt_sum' => 'nullable|numeric',
            'month' => 'nullable|string',
        ];
    }
}
