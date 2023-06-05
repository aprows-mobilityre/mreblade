<?php

namespace App\Http\Requests;

use App\Models\DisclaimerVariable;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDisclaimerVariableRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('disclaimer_variable_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'path' => [
                'string',
                'nullable',
            ],
        ];
    }
}