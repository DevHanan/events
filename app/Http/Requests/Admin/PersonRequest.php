<?php

namespace App\Http\Requests\Admin;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'first_name'             => 'required|alpha_dash|min:3|max:24',
            'last_name'             => 'required|alpha_dash|min:3|max:6',
            'country_id' =>  'required|exists:countries,id',

        ];


    }

    public function attributes()
    {
        return [
            'name'              => __('name'),
        ];
    }
}
