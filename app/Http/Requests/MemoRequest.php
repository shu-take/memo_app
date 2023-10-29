<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemoRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|string|max:50',
            'body' => 'required',
            // 'occupation_id' => 'required|exists:occupations,id',
            // 'due_date' => 'required|after_or_equal:today',
            // 'is_published' => 'nullable|boolean',
        ];
    }

    public function attributes()
    {
        return [
            'body' => 'コメント',
        ];
    }
}
