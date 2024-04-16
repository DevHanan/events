<?php

namespace App\Http\Requests\Admin;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
        $updateMethod = $this->route()->getAction('uses') === 'App\Http\Controllers\Admin\CountryController@update';
    
        return [
            'flag'           => 'required',
            'name'             => 'required|alpha_dash|min:3|max:24',
            'code'             => 'required|alpha_dash|min:3|max:6',
            "initials"          => "required",
            "nationality"        => "required"
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
