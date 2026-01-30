<?php

namespace App\Http\Resources;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnimeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'release_year'=> $this->release_year,
            'episodes'=> $this->episodes,
            'rating'=> $this->rating,
            'has_manga'=> $this->has_manga,
            'synopsis'=> $this->synopsis,
            'characters'=>CharacterResource::collection($this->characters),
        ];
    }
}
