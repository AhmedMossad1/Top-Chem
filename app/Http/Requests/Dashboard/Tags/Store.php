<?php

namespace App\Http\Requests\Dashboard\Tags;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:191',
        ];
    }
}

