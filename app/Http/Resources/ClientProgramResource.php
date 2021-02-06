<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientProgramResource extends JsonResource
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
            'type'          => 'clientProgram',
            'id'            => (string) $this->id,
            'attributes'    => [
                'client_id'     => $this->client_id,
                'program_id'    => $this->program_id,
                'season'        => $this->season,
                'state'         => $this->state,
                'description'   => $this->description,
            ],
            'relationships' => [
                'client' => [
                    'data' => [
                        'type'  => 'client',
                        'id'    => (string) $this->client_id
                    ],
                ],
                'program' => [
                    'data' => [
                        'type'  => 'program',
                        'id'    => (string) $this->program_id
                    ],
                ]
            ],
            'links' => [
                'self' => route('clientPrograms.show',$this->id),
            ],
        ];
    }

    public function with($request)
    {
        return ['included' => [new ClientResource($this->client), new ProgramResource($this->program)]];
    }
}
