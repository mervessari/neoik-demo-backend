<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Helpers\ApiResponse;
use App\Http\Resources\HeroResource;
use App\Services\HeroService;
use App\Http\Requests\Hero\HeroStoreRequest;
use App\Http\Requests\Hero\HeroUpdateRequest;

class HeroController extends Controller
{
    public function __construct(
        protected HeroService $service
    ) {}

    public function index()
    {
        $items = $this->service->list(request('badge'));
        return ApiResponse::success(
            HeroResource::collection($items)
        );
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return ApiResponse::success(
            new HeroResource($item)
        );
    }

    public function store(HeroStoreRequest $request)
    {
        $item = $this->service->create(
            $request->validated()
        );

        return ApiResponse::success(
            new HeroResource($item),
            'Created',
            201
        );
    }

    public function update(HeroUpdateRequest $request, $id)
    {
        $item = $this->service->update(
            $id,
            $request->validated()
        );

        return ApiResponse::success(
            new HeroResource($item),
            'Updated'
        );
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return ApiResponse::success(null, 'Deleted');
    }
}
