<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseListUpdateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'nullable|string',
            'price' => 'nullable|numeric',
            'period' => 'nullable|numeric',
        ];
    }
}
