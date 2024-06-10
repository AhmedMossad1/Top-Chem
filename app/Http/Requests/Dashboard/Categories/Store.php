<?php

namespace App\Http\Requests\Dashboard\Categories;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'max:191'],
            'meta_keywords' => ['max:191'],
            'meta_des' => ['max:191'],
        ];
    }
}
