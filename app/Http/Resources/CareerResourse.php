<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CareerResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request)
    {
        return [
            'type'          => 'career',
            'id'            => (string) $this->id,
            'attributes'    => [
                'id'          => $this->id,
                'name'        => $this->name,
                'state'       => $this->state,
                'description' => $this->description,
            ],
            'relationships' => [],
            'links' => [
                'self' => route('careers.show',$this->id),
            ]
        ];
    }
}
