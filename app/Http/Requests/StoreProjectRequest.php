<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:projects|max:100',
            'content' => 'required|max:255',
            'type_id' => 'numeric'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'A title is required',
            'content.required' => 'A content is required',
        ];
    }
}
