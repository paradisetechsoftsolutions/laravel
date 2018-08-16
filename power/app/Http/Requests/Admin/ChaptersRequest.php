<?php

namespace power\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ChaptersRequest extends FormRequest
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
                    'title' => 'required|unique:chapters,title|max:150',
                    'description' => 'required',
                    'active' => 'required'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title' => 'required|unique:chapters,title,'.$this->chapter->id.'|max:150',
                    'description' => 'required',
                    'active' => 'required'
                ];
            }
            default:break;
        }
    }
}
