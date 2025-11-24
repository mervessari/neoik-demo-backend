<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Http\Resources\TestimonialResource;
use App\Services\TestimonialsService;
use App\Http\Requests\Testimonial\TestimonialStoreRequest;
use App\Http\Requests\Testimonial\TestimonialUpdateRequest;

class TestimonialsController extends Controller
{
    use ApiResponse;

    public function __construct(
        protected TestimonialsService $service
    ) {}

    public function index()
    {
        $items = $this->service->list();
        return $this->success(
            TestimonialResource::collection($items)
        );
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return $this->success(
            new TestimonialResource($item)
        );
    }

    public function store(TestimonialStoreRequest $request)
    {
        $item = $this->service->create($request->validated());
        return $this->success(
            new TestimonialResource($item),
            'Created',
            201
        );
    }

    public function update(TestimonialUpdateRequest $request, $id)
    {
        $item = $this->service->update($id, $request->validated());
        return $this->success(
            new TestimonialResource($item),
            'Updated'
        );
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return $this->success(null, 'Deleted');
    }
}
