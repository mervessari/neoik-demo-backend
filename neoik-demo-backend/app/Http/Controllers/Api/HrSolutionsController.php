<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Repositories\HrSolutionsRepository;
use App\Helpers\ApiResponse;
use App\Http\Resources\HrSolutionResource;
use App\Http\Resources\HrSolutionCollection;

use Illuminate\Http\Request;


use App\Services\HrSolutionsService;
use App\Helpers\ApiResponse;
use App\Http\Resources\HrSolutionResource;
use App\Http\Resources\HrSolutionCollection;

use Illuminate\Http\Request;

class HrSolutionsController extends Controller
{
    protected HrSolutionsService $service;

    public function __construct(HrSolutionsService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $filter = $request->get('badge');
        $items = $this->service->getHrSolutions($filter);
        return ApiResponse::success(new HrSolutionCollection($items));
    }

    public function show($id)
    {
        $item = $this->service->getHrSolution($id);
        return ApiResponse::success(new HrSolutionResource($item));
    }

    public function store(Request $request)
    {
        $item = $this->service->createHrSolution($request->all());
        return ApiResponse::success(new HrSolutionResource($item), 'Created', 201);
    }

    public function update(Request $request, $id)
    {
        $item = $this->service->updateHrSolution($id, $request->all());
        return ApiResponse::success(new HrSolutionResource($item), 'Updated');
    }

    public function destroy($id)
    {
        $this->service->deleteHrSolution($id);
        return ApiResponse::success(null, 'Deleted');
    }
}
