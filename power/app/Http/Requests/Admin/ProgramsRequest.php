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
        $segment = '';
        $image = 'required|';
        if($this->segment(3)){
            $segment = ',id,'.$this->segment(3);
            $image = '';
        }

        return [
            'title' => 'sometimes|required|unique:programs'.$segment,
            'type' => 'sometimes|required|unique:programs'.$segment,
            'price' => 'required',
            'image' => $image.'mimetypes:image/jpeg,image/png,image/jpg|max:1024',
            'short_video' => 'required',
            'video' => 'required',
            'description' => 'required',
            'active' => 'required'
        ];
    }
}