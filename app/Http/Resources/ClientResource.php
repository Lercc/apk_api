<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Voucher;

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
        $vouchers = Voucher::select('vouchers.state')
                               ->join('client_programs', 'client_programs.id', '=', 'vouchers.client_program_id')
                               ->where('client_programs.client_id', '=', $this->id)
                               ->get();
                               
        $voucherState = 'vacio';

        foreach ($vouchers as $key => $voucher) {
            if ( $vouchers[$key]['state'] == 'pendiente') {
                $voucherState = 'pendiente';
                break;
            } else {
                $voucherState = 'verificado';
            }
        }

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
                'status'      => $voucherState,
            ],
            'relationships' => [],
            'links' => [
                'self' => route('clients.show',$this->id),
            ]
        ];
    }
}
