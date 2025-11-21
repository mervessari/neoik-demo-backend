<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IndustrySolutionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,

            'data' => [
                'badge'    => $this->badge,
                'title'    => $this->title ? strtoupper($this->title) : null,
                'subtitle' => $this->subtitle,
                'manufacturing' => $this->manufacturing,
                'healthcare'    => $this->healthcare,
                'retail'        => $this->retail,
            ],

            'meta' => [
                'created_at' => $this->created_at?->format('d.m.Y H:i'),
                'updated_at' => $this->updated_at?->format('d.m.Y H:i'),
            ]
        ];
    }
}
