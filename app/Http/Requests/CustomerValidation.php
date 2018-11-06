<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerValidation extends FormRequest
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
        return [
            //
            'name' => ['required', 'max:191',],
            'email' => ['required', 'max:191', ],
            'password' => ['required', 'max:191', 'min:8', 'same:confirmPassword']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'We need to know who we are dealing with, please enter your name.',
            'email.required' => 'Please enter your email.',
            'password.required' => 'You must enter a password....security reasons',
            'password.min' => 'Please enter a password longer than 8 characters.',
            'password.same' => 'The passwords entered do not match',
        ];
    }
}
