<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentStoreRequest extends FormRequest
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
            'course_list_id' => 'required|exists:course_lists,id',
            'student_id' => 'required|exists:students,id',
            'payment_sum' => 'required|integer',
            'lesson_count_paid' => 'required|integer',
            'month' => 'required|string',
            'date_at' => 'required|date',
        ];
    }
}
