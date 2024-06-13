<?php

namespace App\Http\Requests\Dashboard\Users;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$this->user,
            'group' => 'required',
            'show' => 'required' ,
            'image' => 'nullable|image',
            'job_title'=>'required',

        ];
    }
}
