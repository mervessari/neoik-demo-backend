<?php

namespace App\Repositories;

class HeroRepository
{
    public function get(): array
    {
        return [
            'badge' => __('hero.badge'),
            'title' => __('hero.title'),
            'titleHighlight' => __('hero.titleHighlight'),
            'subtitle' => __('hero.subtitle'),
            'buttonText' => __('hero.buttonText'),
            'trustedBy' => __('hero.trustedBy'),
            'features' => [
                'employees' => [
                    'title' => __('hero.features.employees.title'),
                    'description' => __('hero.features.employees.description'),
                    'items' => __('hero.features.employees.items'),
                ],
                'attendance' => [
                    'title' => __('hero.features.attendance.title'),
                    'description' => __('hero.features.attendance.description'),
                    'items' => __('hero.features.attendance.items'),
                ],
                'payroll' => [
                    'title' => __('hero.features.payroll.title'),
                    'description' => __('hero.features.payroll.description'),
                    'items' => __('hero.features.payroll.items'),
                ],
                'performance' => [
                    'title' => __('hero.features.performance.title'),
                    'description' => __('hero.features.performance.description'),
                    'items' => __('hero.features.performance.items'),
                ],
            ],
            'highlights' => [
                'noCreditCard' => __('hero.highlights.noCreditCard'),
                'cancelAnytime' => __('hero.highlights.cancelAnytime'),
                'freeTrial' => __('hero.highlights.freeTrial'),
            ],
        ];
    }
}
