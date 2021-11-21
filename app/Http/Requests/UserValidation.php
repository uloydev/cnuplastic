<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidation extends FormRequest
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
        if (request()->isMethod('store')) {
            $rules = [
                'name' => ['required','string','max:255'],
                'password' => ['required','string','min:8','confirmed'],
                'whatsapp' => ['required','string'],
                'email' => ['required','string','email','max:255','unique:users'],
                'identity_id' => ['required','numeric','unique:users'],
                'profession' => ['required','string'],
            ];
        }
        else {
            $rules = [
                'name' => ['required','string','max:255'],
                'password' => ['nullable','string','min:8'],
                'whatsapp' => ['required','string'],
                'avatar' => ['nullable','file','mimes:jpg,jpeg,gif,png','max:2048']
            ];
        }

        return $rules;
    }
}
