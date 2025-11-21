<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\NavController;
use App\Http\Controllers\Api\HeroController;
use App\Http\Controllers\Api\HrSolutionsController;
use App\Http\Controllers\Api\IndustrySolutionsController;
use App\Http\Controllers\Api\TestimonialsController;

Route::apiResource('nav', NavController::class);
Route::apiResource('hero', HeroController::class);
Route::apiResource('hr-solutions', HrSolutionsController::class);
Route::apiResource('industry-solutions', IndustrySolutionsController::class);
Route::apiResource('testimonials', TestimonialsController::class);
