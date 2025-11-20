<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HrSolutionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'badge' => $this->badge,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            // Diğer alanlar
        ];
    }
}
