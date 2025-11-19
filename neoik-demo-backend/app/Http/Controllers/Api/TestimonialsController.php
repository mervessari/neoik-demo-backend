<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\TestimonialsService;
use App\Helpers\ApiResponse;

class TestimonialsController extends Controller
{
    protected TestimonialsService $service;

    public function __construct(TestimonialsService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return ApiResponse::success($this->service->getTestimonials());
    }
}
