<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeadResource extends JsonResource
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
            'type'          => 'lead',
            'id'            => (string) $this->id,
            'attributes'    => [
                'dni'                       => $this->dni,
                'name'                      => $this->name,
                'surnames'                  => $this->surnames,
                'mobile'                    => $this->mobile,
                'email'                     => $this->email,
                'career_id'                 => $this->career_id,
                'career_name'               => $this->career->name,
                'semester'                  => $this->semester,
                'institution_id'            => $this->institution_id,
                'institution_name'          => $this->institution->name,
                'english_level'             => $this->english_level,
                'program_id'                => $this->program_id,
                'program_name'              => $this->program->name,
                'communication_channel'     => $this->communication_channel,
                'schedule_start'            => $this->schedule_start,
                'schedule_start_meridiem'   => $this->schedule_start_meridiem,
                'schedule_end'              => $this->schedule_end,
                'schedule_end_meridiem'     => $this->schedule_end_meridiem,
                'schedule_duration'         => $this->schedule_duration,
                'commentary'                => $this->commentary,
                'profile'                   => $this->profile,

                'pipeline_dispatch'         => $this->pipeline_dispatch,
                'table_name'                => $this->table_name,
            ],
            'relationships' => [
                'career' => [
                    'data' => [
                        'type'  => 'career',
                        'id'    => (string) $this->career_id
                    ],
                ],
                'institution' => [
                    'data' => [
                        'type'  => 'institution',
                        'id'    => (string) $this->institution_id
                    ],
                ],
                'program' => [
                    'data' => [
                        'type'  => 'program',
                        'id'    => (string) $this->program_id
                    ],
                ]
            ],
        ];
    }
}
