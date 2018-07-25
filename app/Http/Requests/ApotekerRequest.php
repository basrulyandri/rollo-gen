<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApotekerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}