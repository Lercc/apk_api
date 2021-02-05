<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni'       => (string) $this->faker->unique()->numberBetween(10000000,99999999),
            'name'      => $this->faker->firstName(),
            'surnames'  => $this->faker->lastName,
            'mobile'    => $this->faker->unique()->numberBetween(900000000,999999999),
            'email'     => $this->faker->unique()->freeEmail,
            'profile'   => $this->faker->url,
            'commentary'=> $this->faker->text(200),
        ];
    }
}
