<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this-> id,
            'title' => 'Titltle:' . $this->tittle,
            'content' => 'Content:' . $this->content,
            'ejemplo' => 'Esto es un ejemplo'
        ];
    }
}
