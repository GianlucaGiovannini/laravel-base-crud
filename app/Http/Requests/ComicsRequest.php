<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsRequest extends FormRequest
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
            'title' => 'required|max:100',
            'description' => 'required', 
            'thumb' => 'required', 
            'price' => 'required', 
            'series' => 'required', 
            'sale_date' => 'required', 
            'type' => 'required',
        ];
    }
}
