<?php

namespace App\Http\Requests;

use App\Models\AccessToken;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAccessTokenRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('access_token_create');
    }

    public function rules()
    {
        return [
            'ttl' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
