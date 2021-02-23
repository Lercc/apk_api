<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VoucherResource extends JsonResource
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
            'type'          => 'voucher',
            'id'            => (string) $this->id,
            'attributes'    => [
                'id'                    => $this->id,
                'client_program_id'     => $this->client_program_id,
                'name'                  => $this->name,
                'code'                  => $this->code,
                'amount'                => $this->amount,
                'image'                 => asset("storage/$this->image"),
                'state'                 => $this->state,
                'description'           => $this->description,
            ],
            'relationships' => [
                'clientProgram' => [
                    'data' => [
                        'type'  => 'clientProgram',
                        'id'    => (string) $this->client_program_id
                    ],
                ]
            ],
            'links' => [
                'self' => route('vouchers.show',$this->id),
            ],
        ];
    }

    public function with($request)
    {
        return ['included' => [new ClientProgramResource($this->clientProgram)]];
    }
}
