<?php

namespace Database\Factories;

use App\Models\Voucher;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoucherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voucher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_program_id' => rand(1,100),
            'name'              => $this->faker->sentence(3),
            'code'              => $this->faker->unique()->numberBetween(1000000, 9999999),
            'image'             => 'image/voucher/default-voucher.png',
            // 'state'
            'description'       => $this->faker->text(200),
        ];
    }
}
