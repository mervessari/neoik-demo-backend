<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Helpers\ApiResponse;
use App\Http\Resources\NavResource;
use App\Services\NavService;
use App\Http\Requests\Nav\NavStoreRequest;
use App\Http\Requests\Nav\NavUpdateRequest;

class NavController extends Controller
{
    public function __construct(
        protected NavService $service
    ) {}

    public function index()
    {
        $items = $this->service->list(request('clients'));

        return ApiResponse::success(
            NavResource::collection($items)
        );
    }

    public function show($id)
    {
        $item = $this->service->find($id);

        return ApiResponse::success(
            new NavResource($item)
        );
    }

    public function store(NavStoreRequest $request)
    {
        $item = $this->service->create(
            $request->validated()
        );

        return ApiResponse::success(
            new NavResource($item),
            'Created',
            201
        );
    }

    public function update(NavUpdateRequest $request, $id)
    {
        $item = $this->service->update(
            $id,
            $request->validated()
        );

        return ApiResponse::success(
            new NavResource($item),
            'Updated'
        );
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return ApiResponse::success(null, 'Deleted');
    }
}
