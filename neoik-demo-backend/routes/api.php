<?php

use App\Http\Controllers\Api\NavController;
use App\Http\Controllers\Api\HeroController;
use App\Http\Controllers\Api\HrSolutionsController;
use App\Http\Controllers\Api\IndustrySolutionsController;
use App\Http\Controllers\Api\TestimonialsController;

Route::get('/nav', [NavController::class, 'index']);
Route::get('/hero', [HeroController::class, 'index']);
Route::get('/hr-solutions', [HrSolutionsController::class, 'index']);
Route::get('/industry-solutions', [IndustrySolutionsController::class, 'index']);
Route::get('/testimonials', [TestimonialsController::class, 'index']);

