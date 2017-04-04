<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ReservationRules extends Request
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
            'name'                => 'required',
            'contactName'         => 'required',
            'adults'              => 'required'
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
            'name.required'        => 'The group name is required',
            'contactName.required' => 'The contact name is required'
        ];
    }
}
