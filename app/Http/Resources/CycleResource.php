<?php

namespace App\Http\Resources;

use App\Models\Niveau;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CycleResource extends JsonResource
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
            'libelle'=> $this->libelle,
            'niveaux'=>NiveauResource::collection($this->niveaux),
        ];
    }
}