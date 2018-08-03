<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ModulesRequest extends FormRequest
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
        $segment = '';
        if($this->segment(3)){
            $segment = ',id,'.$this->segment(3);
        }

        return [
            'title' => 'sometimes|required|unique:programs'.$segment,
            'description' => 'required',
            'active' => 'required'
        ];
    }
}
