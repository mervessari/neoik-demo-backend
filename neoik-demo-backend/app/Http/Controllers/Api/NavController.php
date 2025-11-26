<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $items = $this->service->all();

        return $this->success(
            NavResource::collection($items)
        );
    }

    public function show($id)
    {
        $item = $this->service->find($id);

        return $this->success(
            new NavResource($item)
        );
    }

    public function store(NavStoreRequest $request)
    {
        $item = $this->service->create($request->validated());

        return $this->success(
            new NavResource($item),
            'Created',
            201
        );
    }

    public function update(NavUpdateRequest $request, $id)
    {
        $item = $this->service->update($id, $request->validated());

        return $this->success(
            new NavResource($item),
            'Updated'
        );
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return $this->success(null, 'Deleted');
    }
}
