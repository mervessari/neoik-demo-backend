<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\NavService;
use App\Helpers\ApiResponse;

class NavController extends Controller
{
    protected NavService $navService;

    public function __construct(NavService $navService)
    {
        $this->navService = $navService;
    }

    public function index()
    {
        return ApiResponse::success($this->navService->getNav());
    }
}
