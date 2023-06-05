<?php

namespace App\Http\Requests;

use App\Models\DisclaimerGroup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDisclaimerGroupRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('disclaimer_group_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
