<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackValidation extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $addRule = '';
        if ($this->isMethod('POST')) {
            $addRule = 'required';
        }
        else {
            $$addRule = 'sometimes';
        }
        return [
            'name' => $addRule . '|max:100',
            'email' => $addRule . '|unique:feedback|email',
            'message' => $addRule . '|max:255',
            'is_publish' => 'boolean'
        ];
    }
}
