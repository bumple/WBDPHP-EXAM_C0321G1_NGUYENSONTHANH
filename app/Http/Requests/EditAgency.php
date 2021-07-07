<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAgency extends FormRequest
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
            'agency_name' => 'required',
            'agency_id' => 'required',
            'agency_phone' => 'required|min:10|max:11',
            'agency_email' => 'required',
            'agency_address' => 'required',
            'manager_name' => 'required',
            'status' => 'required',
        ];
    }
}
