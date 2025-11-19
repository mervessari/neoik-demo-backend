<?php

namespace App\Repositories;

class IndustrySolutionsRepository
{
    public function get(): array
    {
        return [
            'badge' => __('industrySolutions.badge'),
            'title' => __('industrySolutions.title'),
            'subtitle' => __('industrySolutions.subtitle'),
            'manufacturing' => [
                'title' => __('industrySolutions.manufacturing.title'),
                'description' => __('industrySolutions.manufacturing.description'),
                'details' => [
                    'shift' => __('industrySolutions.manufacturing.details.shift'),
                    'incentives' => __('industrySolutions.manufacturing.details.incentives'),
                    'safety' => __('industrySolutions.manufacturing.details.safety'),
                    'equipment' => __('industrySolutions.manufacturing.details.equipment'),
                ],
            ],
            'healthcare' => [
                'title' => __('industrySolutions.healthcare.title'),
                'description' => __('industrySolutions.healthcare.description'),
                'details' => [
                    'credentials' => __('industrySolutions.healthcare.details.credentials'),
                    'leave' => __('industrySolutions.healthcare.details.leave'),
                    'compliance' => __('industrySolutions.healthcare.details.compliance'),
                    'scheduling' => __('industrySolutions.healthcare.details.scheduling'),
                ],
            ],
            'retail' => [
                'title' => __('industrySolutions.retail.title'),
                'description' => __('industrySolutions.retail.description'),
                'details' => [
                    'seasonal' => __('industrySolutions.retail.details.seasonal'),
                    'commission' => __('industrySolutions.retail.details.commission'),
                    'multiLocation' => __('industrySolutions.retail.details.multiLocation'),
                    'analytics' => __('industrySolutions.retail.details.analytics'),
                ],
            ],
        ];
    }
}
