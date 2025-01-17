<?php

namespace App\Http\Requests;

use App\Models\DisclaimerVariable;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDisclaimerVariableRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('disclaimer_variable_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:disclaimer_variables,id',
        ];
    }
}
