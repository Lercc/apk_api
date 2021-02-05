<?php

namespace Database\Factories;

use App\Models\ClientProgram;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientProgramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientProgram::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id'     => rand(1,50),
            'program_id'    => rand(1,4),
            'season'        => (string) $this->faker->numberBetween(2019,2021),
            // 'state'         => 'activado',
            'description'   => $this->faker->text(200),
        ];
    }
}
