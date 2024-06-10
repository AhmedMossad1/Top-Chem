<?php

namespace App\Http\Requests\Dashboard\Products;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest{
    public function rules(): array{
        return [
            'name' => 'required|max:191',
            'description' => 'required|min:10',
            'cat_id' => 'required|integer',
            'published' => 'required' ,
            'image' => 'image'
        ];
    }
}
