<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Traits\ApiResponse;
use App\Http\Resources\HrSolutionResource;
use App\Services\HrSolutionsService;
use App\Http\Requests\Hr\HrSolutionStoreRequest;
use App\Http\Requests\Hr\HrSolutionUpdateRequest;

class HrSolutionsController extends BaseController
{
    public function __construct(
        protected HrSolutionsService $service
    ) {}

    public function index(HrSolutionStoreRequest $request)
    {
        $badge = $request->validated()['badge'] ?? null;
        $items = $this->service->list($badge);
        return $this->success(
            HrSolutionResource::collection($items)
        );
    }

    public function show($id)
    {
        $item = $this->service->find($id);

        return $this->success(
            new HrSolutionResource($item)
        );
    }

    public function store(HrSolutionStoreRequest $request)
    {
        $item = $this->service->create(
            $request->validated()
        );

        return $this->success(
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

        return $this->success(
            new HrSolutionResource($item),
            'Updated'
        );
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return $this->success(null, 'Deleted');
    }
}
