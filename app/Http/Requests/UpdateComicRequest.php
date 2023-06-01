<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:50',
            'description' => 'required|min:5|max:1000',
            'thumb' => 'required|min:5|max:500',
            'price' => 'required|min:3|max:10',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required'
        ];
    }
}
