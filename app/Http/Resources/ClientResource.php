<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'type'          => 'client',
            'id'            => (string) $this->id,
            'attributes'    => [
                'id'          => $this->id,
                'dni'         => $this->dni,
                'name'        => $this->name,
                'surnames'    => $this->surnames,
                'mobile'      => $this->mobile,
                'email'       => $this->email,
                'profile'     => $this->profile,
                'commentary'  => $this->commentary,
            ],
            'relationships' => [],
            'links' => [
                'self' => route('clients.show',$this->id),
            ]
        ];
    }
}
