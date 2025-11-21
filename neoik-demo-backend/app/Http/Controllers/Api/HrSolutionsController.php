<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Helpers\ApiResponse;
use App\Http\Resources\HrSolutionResource;
use App\Services\HrSolutionsService;
use App\Http\Requests\Hr\HrSolutionStoreRequest;
use App\Http\Requests\Hr\HrSolutionUpdateRequest;

class HrSolutionsController extends Controller
{
    public function __construct(
        protected HrSolutionsService $service
    ) {}

    public function index()
    {
        $items = $this->service->list();

        return ApiResponse::success(
            HrSolutionResource::collection($items)
        );
    }

    public function show($id)
    {
        $item = $this->service->find($id);

        return ApiResponse::success(
            new HrSolutionResource($item)
        );
    }

    public function store(HrSolutionStoreRequest $request)
    {
        $item = $this->service->create(
            $request->validated()
        );

        return ApiResponse::success(
            new HrSolutionResource($item),
            'Created',
            201
        );
    }

    public function update(HrSolutionUpdateRequest $request, $id)
    {
        $item = $this->service->update(
            $id,
            $request->validated()
        );

        return ApiResponse::success(
            new HrSolutionResource($item),
            'Updated'
        );
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return ApiResponse::success(null, 'Deleted');
    }
}
