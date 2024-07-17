<?php

namespace App\Http\Requests\Airport;

class SearchRequest extends \Illuminate\Foundation\Http\FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'query' => ['required', 'string', 'min:1'],
        ];
    }
}