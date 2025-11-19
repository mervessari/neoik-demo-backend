<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\HrSolutionsService;
use App\Helpers\ApiResponse;

class HrSolutionsController extends Controller
{
    protected HrSolutionsService $service;

    public function __construct(HrSolutionsService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return ApiResponse::success($this->service->getHrSolutions());
    }
}
