<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HrSolutionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,

            'data' => [
                'badge'    => $this->badge,
                'title'    => $this->title ? ucfirst($this->title) : null,
                'subtitle' => $this->subtitle,
                'personnel'  => $this->personnel,
                'financial'  => $this->financial,
                'leave'      => $this->leave,
                'document'   => $this->document,
                'inventory'  => $this->inventory,
                'performance'=> $this->performance,
                'cta'        => $this->cta,
            ],

            'meta' => [
                'created_at' => $this->created_at?->format('d.m.Y H:i'),
                'updated_at' => $this->updated_at?->format('d.m.Y H:i'),
            ]
        ];
    }
}
