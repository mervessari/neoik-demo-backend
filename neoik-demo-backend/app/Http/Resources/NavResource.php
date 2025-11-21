<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NavResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,

            'data' => [
                'hr_solutions'       => $this->hr_solutions,
                'industry_solutions' => $this->industry_solutions,
                'clients'            => $this->clients,
                'contact'            => $this->contact ? strtoupper($this->contact) : null,
            ],

            'meta' => [
                'created_at' => $this->created_at?->format('d.m.Y H:i'),
                'updated_at' => $this->updated_at?->format('d.m.Y H:i'),
            ]
        ];
    }
}
