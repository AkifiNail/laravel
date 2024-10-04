<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourRequests extends FormRequest
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
            'name' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'formation_id' => 'nullable|integer|exists:formations,id',
            'groupe_id' => 'nullable|integer|exists:groupes,id'
        ];
    }
}
