<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'type'          => 'user',
            'id'            => (string) $this->id,
            'attributes'    => [
                'id'    => $this->id,
                'name'    => $this->name,
                'email' => $this->email,
                'role'  => $this->roles,
            ],
            'relationships' => [],
            'links' => [
                'self' => route('users.show',$this->id),
            ],
        ];
    }
}
