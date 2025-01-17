<?php

namespace App\Http\Requests;

use App\Models\KeywordApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyKeywordAppRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('keyword_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:keyword_apps,id',
        ];
    }
}
