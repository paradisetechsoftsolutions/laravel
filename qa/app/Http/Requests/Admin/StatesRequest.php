<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StatesRequest extends FormRequest
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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name' => 'required|unique:states,name',
                    'abbreviation' => 'required|alpha|min:2|max:2',
                    'active' => 'required'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'required|unique:states,name,'.$this->state->id,
                    'abbreviation' => 'required|alpha|min:2|max:2',
                    'active' => 'required'
                ];
            }
            default:break;
        }
    }



}