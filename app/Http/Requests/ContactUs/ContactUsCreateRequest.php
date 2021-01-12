<?php

namespace App\Http\Requests\ContactUs;

use Anik\Form\FormRequest;

class ContactUsCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required|min:3|max:255'
        ];
    }

    protected function recaptcha()
    {

    }
}
