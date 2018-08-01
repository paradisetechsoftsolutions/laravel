<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProgramsRequest extends FormRequest
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
        $segment = ($this->segment(3))?',id,'.$this->segment(3):'';
        return [
            'title' => 'sometimes|required|unique:programs'.$segment,
            'type' => 'sometimes|required|unique:programs'.$segment,
            'price' => 'required',
            'description' => 'required',
            'active' => 'required'
        ];
    }
}