<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsRequest extends FormRequest
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
            'name' => 'required',
            'model' => 'required',
            'power' => 'required|numeric|min:45|max:999',
            'km' => 'required',
            'price' => 'required|numeric|min:5000|max:30000',
            'year' => 'required|numeric|min:2000|max:2021',
        ];
    }
}
