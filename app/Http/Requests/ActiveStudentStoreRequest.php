<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActiveStudentStoreRequest extends FormRequest
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
            'payment_amount' => 'required|numeric',
            'lesson_paid' => 'required|numeric',
            'lesson_passed' => 'required|numeric',
            'lesson_debt_count' => 'required|numeric',
            'lesson_debt_sum' => 'required|numeric',
            'month' => 'required|string',
        ];
    }
}
