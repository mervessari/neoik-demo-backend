<?php

namespace App\Repositories;

class TestimonialsRepository
{
    public function get(): array
    {
        return [
            'badge' => __('testimonials.badge'),
            'title' => __('testimonials.title'),
            'subtitle' => __('testimonials.subtitle'),
            'cta' => [
                'title' => __('testimonials.cta.title'),
                'subtitle' => __('testimonials.cta.subtitle'),
                'button' => __('testimonials.cta.button'),
            ],
            'mehmet' => [
                'name' => __('testimonials.mehmet.name'),
                'position' => __('testimonials.mehmet.position'),
                'feedback' => __('testimonials.mehmet.feedback'),
            ],
            'semih' => [
                'name' => __('testimonials.semih.name'),
                'position' => __('testimonials.semih.position'),
                'feedback' => __('testimonials.semih.feedback'),
            ],
            'abdurrahman' => [
                'name' => __('testimonials.abdurrahman.name'),
                'position' => __('testimonials.abdurrahman.position'),
                'feedback' => __('testimonials.abdurrahman.feedback'),
            ],
        ];
    }
}
