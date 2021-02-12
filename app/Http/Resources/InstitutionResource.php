<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstitutionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'type'          => 'career',
            'id'            => (string) $this->id,
            'attributes'    => [
                'id'          => $this->id,
                'name'        => $this->name,
                'tipo'        => $this->tipo,
                'state'       => $this->state,
                'description' => $this->description,
            ],
            'relationships' => [],
            'links' => [
                'self' => route('institutions.show',$this->id),
            ]
        ];
    }
}
