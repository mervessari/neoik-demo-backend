<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HeroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'badge' => $this->badge,
            'title' => $this->title,
            'title_highlight' => $this->title_highlight,
            'subtitle' => $this->subtitle,
            'button_text' => $this->button_text,
            'trusted_by' => $this->trusted_by,
            // Diğer alanlar
        ];
    }
}
