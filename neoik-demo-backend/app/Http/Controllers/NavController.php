<?php

namespace App\Http\Controllers;

use App\Services\NavService;
use Illuminate\Http\JsonResponse;

class NavController extends Controller
{
    protected NavService $service;

    public function __construct(NavService $service)
    {
        $this->service = $service;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->service->getNav(),
        ]);
    }
}
