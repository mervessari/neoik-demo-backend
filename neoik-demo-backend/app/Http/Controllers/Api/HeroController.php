<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Repositories\HeroRepository;
use App\Helpers\ApiResponse;
use App\Http\Resources\HeroResource;
use App\Http\Resources\HeroCollection;

use Illuminate\Http\Request;


class HeroController extends Controller
{
    protected HeroService $service;

    public function __construct(HeroService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $filter = $request->get('badge');
        $heroes = $this->service->getHeroes($filter);
        return ApiResponse::success(new HeroCollection($heroes));
    }

    public function show($id)
    {
        $hero = $this->service->getHero($id);
        return ApiResponse::success(new HeroResource($hero));
    }

    public function store(Request $request)
    {
        $hero = $this->service->createHero($request->all());
        return ApiResponse::success(new HeroResource($hero), 'Hero created', 201);
    }

    public function update(Request $request, $id)
    {
        $hero = $this->service->updateHero($id, $request->all());
        return ApiResponse::success(new HeroResource($hero), 'Hero updated');
    }

    public function destroy($id)
    {
        $this->service->deleteHero($id);
        return ApiResponse::success(null, 'Hero deleted');
    }
}
