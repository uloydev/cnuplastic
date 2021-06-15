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
            $addRule = 'sometimes';
        }
        return [
            'name' => $addRule . '|max:100|min:3',
            'email' => $addRule . '|email:rfc,dns',
            'phone' => $addRule . '|numeric|starts_with:0,62|digits_between:7,13',
            'message' => $addRule . '|max:255',
            'is_publish' => 'boolean'
        ];
    }

    public function redirect()
    {
        if ($this->isMethod('POST')) {
            return redirect('/#section-kontak');
        }
        return redirect()->back();
    }
}
