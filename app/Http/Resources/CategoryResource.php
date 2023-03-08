<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category' =>$this->category,
            'title' =>$this->title,
            'content' =>$this->content,
            'media' =>$this->media,
            'carousel' => CarouselResource::collection($this->carousel)
        ];
    }



}
