<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseListStoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
          'name' => 'required|string|unique:course_lists,name',
          'price' => 'required|decimal:0,3',
          'period' => 'nullable|numeric',
        ];
    }
}
