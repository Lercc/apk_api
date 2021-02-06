<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ClientProgramCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function with($request)
    {
        return [
            'included' => [
                $this->collection->pluck('client')->unique()->values()->map(function ($client) {
                    return new ClientResource($client);
                }),
                $this->collection->pluck('program')->unique()->values()->map(function ($program) {
                    return new ProgramResource($program);
                }),
            ]
        ];
    }
}
