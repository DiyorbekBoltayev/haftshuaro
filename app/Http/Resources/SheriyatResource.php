<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SheriyatResource extends JsonResource
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
            'shoir' => $this->shoir,
            'title' => $this->title_uz,
            'matn' => $this->matn_uz,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];

    }
}
