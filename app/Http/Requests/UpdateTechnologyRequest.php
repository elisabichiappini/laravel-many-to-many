<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//import validation rule
use Illuminate\Validation\Rule;

class UpdateTechnologyRequest extends FormRequest
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
            'title' => ['required', Rule::unique('technologies')->ignore($this->technology), 'max:48', 'string'],
            'slug' => ['nullable']
        ];
    }
}
