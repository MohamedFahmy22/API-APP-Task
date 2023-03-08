<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarouselResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id_ad' =>$this->status,
            'content' =>$this->content,
            'see_more' =>$this->see_more,
            'media' =>$this->media,
        ];
    }
}
