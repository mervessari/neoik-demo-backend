<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,

            'data' => [
                'badge'    => $this->badge,
                'title'    => $this->title ? ucfirst($this->title) : null,
                'subtitle' => $this->subtitle,
                'cta'      => $this->cta,
                'mehmet'   => $this->mehmet,
                'semih'    => $this->semih,
                'abdurrahman' => $this->abdurrahman,
            ],

            'meta' => [
                'created_at' => $this->created_at?->format('d.m.Y H:i'),
                'updated_at' => $this->updated_at?->format('d.m.Y H:i'),
            ]
        ];
    }
}
