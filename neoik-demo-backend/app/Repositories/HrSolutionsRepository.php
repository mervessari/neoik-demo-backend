<?php

namespace App\Repositories;

class HrSolutionsRepository
{
    public function get(): array
    {
        return [
            'badge' => __('hrSolutions.badge'),
            'title' => __('hrSolutions.title'),
            'subtitle' => __('hrSolutions.subtitle'),
            'personnel' => [
                'title' => __('hrSolutions.personnel.title'),
                'description' => __('hrSolutions.personnel.description'),
            ],
            'financial' => [
                'title' => __('hrSolutions.financial.title'),
                'description' => __('hrSolutions.financial.description'),
            ],
            'leave' => [
                'title' => __('hrSolutions.leave.title'),
                'description' => __('hrSolutions.leave.description'),
            ],
            'document' => [
                'title' => __('hrSolutions.document.title'),
                'description' => __('hrSolutions.document.description'),
            ],
            'inventory' => [
                'title' => __('hrSolutions.inventory.title'),
                'description' => __('hrSolutions.inventory.description'),
            ],
            'performance' => [
                'title' => __('hrSolutions.performance.title'),
                'description' => __('hrSolutions.performance.description'),
            ],
            'cta' => [
                'title' => __('hrSolutions.cta.title'),
                'description' => __('hrSolutions.cta.description'),
                'button' => __('hrSolutions.cta.button'),
                'stats' => [
                    'teamMembers' => [
                        'value' => __('hrSolutions.cta.stats.teamMembers.value'),
                        'label' => __('hrSolutions.cta.stats.teamMembers.label'),
                    ],
                    'documents' => [
                        'value' => __('hrSolutions.cta.stats.documents.value'),
                        'label' => __('hrSolutions.cta.stats.documents.label'),
                    ],
                    'tasksCompleted' => [
                        'value' => __('hrSolutions.cta.stats.tasksCompleted.value'),
                        'label' => __('hrSolutions.cta.stats.tasksCompleted.label'),
                    ],
                    'customerSatisfaction' => [
                        'value' => __('hrSolutions.cta.stats.customerSatisfaction.value'),
                        'label' => __('hrSolutions.cta.stats.customerSatisfaction.label'),
                    ],
                ],
            ],
        ];
    }
}
