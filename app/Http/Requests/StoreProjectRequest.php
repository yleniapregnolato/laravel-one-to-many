<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => ['required', 'max:200', 'min:5', 'unique:projects'],
            'type_id' => ['required'],
            'content' => ['nullable', 'min:10', 'max:5000'],
            'start_date' => ['nullable'],
            'end_date' => ['nullable']
        ];
    }
}
