<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Repositories\TestimonialsRepository;
use App\Helpers\ApiResponse;
use App\Http\Resources\TestimonialResource;
use App\Http\Resources\TestimonialCollection;

use Illuminate\Http\Request;


use App\Services\TestimonialsService;
use App\Helpers\ApiResponse;
use App\Http\Resources\TestimonialResource;
use App\Http\Resources\TestimonialCollection;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    protected TestimonialsService $service;

    public function __construct(TestimonialsService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $filter = $request->get('badge');
        $items = $this->service->getTestimonials($filter);
        return ApiResponse::success(new TestimonialCollection($items));
    }

    public function show($id)
    {
        $item = $this->service->getTestimonial($id);
        return ApiResponse::success(new TestimonialResource($item));
    }

    public function store(Request $request)
    {
        $item = $this->service->createTestimonial($request->all());
        return ApiResponse::success(new TestimonialResource($item), 'Created', 201);
    }

    public function update(Request $request, $id)
    {
        $item = $this->service->updateTestimonial($id, $request->all());
        return ApiResponse::success(new TestimonialResource($item), 'Updated');
    }

    public function destroy($id)
    {
        $this->service->deleteTestimonial($id);
        return ApiResponse::success(null, 'Deleted');
    }
}
