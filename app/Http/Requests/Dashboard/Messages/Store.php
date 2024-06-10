<?php

namespace App\Http\Requests\Dashboard\Messages;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{

    public function rules(): array
    {
        return [
            'message'=> 'required|min:10'
        ];
    }
}
