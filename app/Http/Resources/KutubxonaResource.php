<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KutubxonaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name_uz,
            'photo' => $this->photo,
            'file' => $this->file,
            'avtor' => $this->outor_uz
        ];
    }
}
