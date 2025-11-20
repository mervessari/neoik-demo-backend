<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Repositories\NavRepository;
use App\Helpers\ApiResponse;
use App\Http\Resources\NavResource;
use App\Http\Resources\NavCollection;

use Illuminate\Http\Request;


use App\Services\NavService;
use App\Helpers\ApiResponse;
use App\Http\Resources\NavResource;
use App\Http\Resources\NavCollection;

use Illuminate\Http\Request;

class NavController extends Controller
{
    protected NavService $service;

    public function __construct(NavService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $filter = $request->get('clients');
        $items = $this->service->getNavs($filter);
        return ApiResponse::success(new NavCollection($items));
    }

    public function show($id)
    {
        $item = $this->service->getNav($id);
        return ApiResponse::success(new NavResource($item));
    }

    public function store(Request $request)
    {
        $item = $this->service->createNav($request->all());
        return ApiResponse::success(new NavResource($item), 'Created', 201);
    }

    public function update(Request $request, $id)
    {
        $item = $this->service->updateNav($id, $request->all());
        return ApiResponse::success(new NavResource($item), 'Updated');
    }

    public function destroy($id)
    {
        $this->service->deleteNav($id);
        return ApiResponse::success(null, 'Deleted');
    }
}
