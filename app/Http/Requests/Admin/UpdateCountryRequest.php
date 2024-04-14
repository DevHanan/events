<?php

namespace App\Http\Requests\Admin;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCountryRequest extends FormRequest
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

            'name' => [
                'required'
            ],          
            'code' => [
                'required'
            ],           
             "flag" => 'required',
            "initials" => "required",
            "nationality"  => "required"
        ];


    }

    public function attributes()
    {
        return [
            'name'              => __('name'),
            'code'                => __('code')
        ];
    }
}
