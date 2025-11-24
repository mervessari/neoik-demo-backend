<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Http\Resources\IndustrySolutionResource;
use App\Services\IndustrySolutionsService;
use App\Http\Requests\Industry\IndustrySolutionStoreRequest;
use App\Http\Requests\Industry\IndustrySolutionUpdateRequest;

class IndustrySolutionsController extends Controller
{
    use ApiResponse;

    public function __construct(
        protected IndustrySolutionsService $service
    ) {}

    public function index()
    {
        $items = $this->service->list();
        return $this->success(
            IndustrySolutionResource::collection($items)
        );
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return $this->success(
            new IndustrySolutionResource($item)
        );
    }

    public function store(IndustrySolutionStoreRequest $request)
    {
        $item = $this->service->create($request->validated());
        return $this->success(
            new IndustrySolutionResource($item),
            'Created',
            201
        );
    }

    public function update(IndustrySolutionUpdateRequest $request, $id)
    {
        $item = $this->service->update($id, $request->validated());
        return $this->success(
            new IndustrySolutionResource($item),
            'Updated'
        );
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return $this->success(null, 'Deleted');
    }
}
