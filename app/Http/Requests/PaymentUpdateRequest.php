<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentUpdateRequest extends FormRequest
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
            'course_list_id' => 'nullable|exists:course_lists,id',
            'student_id' => 'nullable|exists:students,id',
            'payment_sum' => 'nullable|integer',
            'lesson_count_paid' => 'nullable|integer',
            'month' => 'nullable|string',
             'date_at' => 'nullable|date',
        ];
    }
}
