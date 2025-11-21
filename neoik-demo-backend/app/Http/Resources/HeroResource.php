<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HeroResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,

            'data' => [
                'badge'           => $this->badge,
                'title'           => $this->title ? ucfirst($this->title) : null,
                'title_highlight' => $this->title_highlight,
                'subtitle'        => $this->subtitle,
                'button_text'     => $this->button_text,
                'trusted_by'      => $this->trusted_by,
            ],

            'meta' => [
                'created_at' => $this->created_at?->format('d.m.Y H:i'),
                'updated_at' => $this->updated_at?->format('d.m.Y H:i'),
            ]
        ];
    }
}
