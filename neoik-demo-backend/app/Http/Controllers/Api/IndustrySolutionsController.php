<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\IndustrySolutionsService;
use App\Helpers\ApiResponse;

class IndustrySolutionsController extends Controller
{
    protected IndustrySolutionsService $service;

    public function __construct(IndustrySolutionsService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return ApiResponse::success($this->service->getIndustrySolutions());
    }
}
