<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DatasRequest extends FormRequest
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
                    'title' => 'required|unique:datas,title',
                    'categories_title' => 'required',
                    'states_id' => 'required',
                    'table_rows' => 'required',
                    'active' => 'required'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title' => 'required|unique:datas,title,'.$this->data->id,
                    'categories_title' => 'required',
                    'states_id' => 'required',
                    'table_rows' => 'required',
                    'active' => 'required'
                ];
            }
            default:break;
        }
    }



}