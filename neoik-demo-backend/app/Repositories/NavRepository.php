<?php

namespace App\Repositories;

class NavRepository
{
    public function get(): array
    {
        return [
            'hrSolutions' => __('nav.hrSolutions'),
            'industrySolutions' => __('nav.industrySolutions'),
            'clients' => __('nav.clients'),
            'contact' => __('nav.contact'),
        ];
    }
}
