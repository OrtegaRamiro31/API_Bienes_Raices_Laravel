<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'title'       => $this->title,
            'price'       => $this->price,
            'description' => $this->description,
            'wc'          => $this->wc,
            'parking'     => $this->parking,
            'rooms'       => $this->rooms,
            'user'        => new UserResource($this->user),
            'images'      => $this->images,
        ];
    }
}
