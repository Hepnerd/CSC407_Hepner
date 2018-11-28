<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReviewValidation extends FormRequest
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
          'review'   => ['required', 'max:64'],
          'rating'  => ['required', 'max:64'],
      ];
    }
    public function messages()
    {
      return [
          'review.required' => 'Tell me how it was.',
          'rating.required' => 'I want to know how good it was.',
        ];
  }
}
