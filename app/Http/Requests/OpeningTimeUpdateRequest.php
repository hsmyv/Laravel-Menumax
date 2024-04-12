<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpeningTimeUpdateRequest extends FormRequest
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
           'monday' =>    'nullable',
           'tuesday' =>    'nullable',
           'wednesday' =>    'nullable',
           'thursday' =>    'nullable',
           'friday' =>    'nullable',
           'saturday' =>    'nullable',
           'sunday' =>    'nullable',
        ];
    }
}
