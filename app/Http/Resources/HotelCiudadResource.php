<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelCiudadResource extends JsonResource
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
            'ciudad' => $this->ciudad->nombre,
            'numHotels' => $this->count,
        ];

    }
}