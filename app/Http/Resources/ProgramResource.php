<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProgramResource extends JsonResource
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
            'type'           => 'program',
            'id'             => (string) $this->id,
            'attributes'     => [
                'id'             => $this->id,
                'name'           => $this->name,
                'state'          => $this->state,
                'description'    => $this->description,
            ],
            'relationships' => [],
            'links' => [
                'self' => route('programs.show',$this->id),
            ]
        ];
    }
}
