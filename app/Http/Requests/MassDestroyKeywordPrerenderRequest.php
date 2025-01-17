<?php

namespace App\Http\Requests;

use App\Models\KeywordPrerender;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyKeywordPrerenderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('keyword_prerender_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:keyword_prerenders,id',
        ];
    }
}
