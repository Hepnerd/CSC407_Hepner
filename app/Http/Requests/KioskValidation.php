<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KioskValidation extends FormRequest
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
            'location' => ['required', 'max:128'],
            'address' => ['required', 'max:512']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'location.required' => 'Please provide a location.',
            'address.required' => 'The kiosk\'s address must be entered.',
        ];
    }

}
