<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieValidation extends FormRequest
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
            'title' => ['required', 'max:64'],
            'length' => ['required', 'max:11'],
            'description' => ['required', 'max:1024'],
            'genreID' => ['required', 'gte:1'],
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
            'title.required' => 'Please provide a movie title',
            'length.required' => 'The movies length is needed please.',
            'description.required' => 'The people want to hear what its about...give them a description.',
            'genreID.required' => 'Please select a genre from the drop down list.',
            'genreID.gte' => 'Please select a valid genre from the drop down list.'
        ];
    }
}
