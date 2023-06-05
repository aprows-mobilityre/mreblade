<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLendingOfficerRequest;
use App\Http\Requests\UpdateLendingOfficerRequest;
use App\Http\Resources\Admin\LendingOfficerResource;
use App\Models\LendingOfficer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LendingOfficerApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('lending_officer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LendingOfficerResource(LendingOfficer::with(['user'])->get());
    }

    public function store(StoreLendingOfficerRequest $request)
    {
        $lendingOfficer = LendingOfficer::create($request->all());

        return (new LendingOfficerResource($lendingOfficer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(LendingOfficer $lendingOfficer)
    {
        abort_if(Gate::denies('lending_officer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LendingOfficerResource($lendingOfficer->load(['user']));
    }

    public function update(UpdateLendingOfficerRequest $request, LendingOfficer $lendingOfficer)
    {
        $lendingOfficer->update($request->all());

        return (new LendingOfficerResource($lendingOfficer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(LendingOfficer $lendingOfficer)
    {
        abort_if(Gate::denies('lending_officer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lendingOfficer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}