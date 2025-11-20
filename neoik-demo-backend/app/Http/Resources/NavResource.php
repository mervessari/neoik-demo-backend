<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NavResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'hr_solutions' => $this->hr_solutions,
            'industry_solutions' => $this->industry_solutions,
            'clients' => $this->clients,
            'contact' => $this->contact,
        ];
    }
}
