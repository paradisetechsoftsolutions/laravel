<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
                    'title' => 'required|unique:news,title',
                    'image' => 'required|mimetypes:image/jpeg,image/png,image/jpg|max:1024',
                    'description' => 'required',
                    'active' => 'required'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title' => 'required|unique:news,title,'.$this->news->id,
                    'image' => 'mimetypes:image/jpeg,image/png,image/jpg|max:1024',
                    'description' => 'required',
                    'active' => 'required'
                ];
            }
            default:break;
        }
    }
}
