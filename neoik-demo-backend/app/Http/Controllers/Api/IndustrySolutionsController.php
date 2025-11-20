<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Repositories\IndustrySolutionsRepository;
use App\Helpers\ApiResponse;
use App\Http\Resources\IndustrySolutionResource;
use App\Http\Resources\IndustrySolutionCollection;

use Illuminate\Http\Request;


class IndustrySolutionsController extends Controller
{
    protected IndustrySolutionsRepository $repository;

    public function __construct(IndustrySolutionsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $filter = $request->get('badge');
        $items = $this->service->getIndustrySolutions($filter);
        return ApiResponse::success(new IndustrySolutionCollection($items));
    }

    public function show($id)
    {
        $item = $this->service->getIndustrySolution($id);
        return ApiResponse::success(new IndustrySolutionResource($item));
    }

    public function store(Request $request)
    {
        $item = $this->service->createIndustrySolution($request->all());
        return ApiResponse::success(new IndustrySolutionResource($item), 'Created', 201);
    }

    public function update(Request $request, $id)
    {
        $item = $this->service->updateIndustrySolution($id, $request->all());
        return ApiResponse::success(new IndustrySolutionResource($item), 'Updated');
    }

    public function destroy($id)
    {
        $this->service->deleteIndustrySolution($id);
        return ApiResponse::success(null, 'Deleted');
    }
}
}
