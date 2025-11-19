<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\HeroService;
use App\Helpers\ApiResponse;

class HeroController extends Controller
{
    protected HeroService $heroService;

    public function __construct(HeroService $heroService)
    {
        $this->heroService = $heroService;
    }

    public function index()
    {
        return ApiResponse::success($this->heroService->getHero());
    }
}
