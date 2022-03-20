<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetInfoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'php'       => 'string|nullable',
            'laravel'   => 'string|nullable',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
