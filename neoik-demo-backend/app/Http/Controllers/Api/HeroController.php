<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Http\Resources\HeroResource;
use App\Services\HeroService;
use App\Http\Requests\Hero\HeroStoreRequest;
use App\Http\Requests\Hero\HeroUpdateRequest;
use App\Http\Requests\Hero\HeroStoreRequest;

class HeroController extends Controller
{
    public function __construct(
        protected HeroService $service
    ) {}

    public function index(HeroStoreRequest $request)
    {
        $badge = $request->validated()['badge'] ?? null;
        $items = $this->service->list($badge);
        return $this->success(
            HeroResource::collection($items)
        );
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return $this->success(
            new HeroResource($item)
        );
    }

    public function store(HeroStoreRequest $request)
    {
        $item = $this->service->create(
            $request->validated()
        );

        return $this->success(
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

        return $this->success(
            new HeroResource($item),
            'Updated'
        );
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return $this->success(null, 'Deleted');
    }
}
