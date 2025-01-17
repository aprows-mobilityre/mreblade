<?php

namespace App\Http\Requests;

use App\Models\Chart;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyChartRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('chart_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:charts,id',
        ];
    }
}
