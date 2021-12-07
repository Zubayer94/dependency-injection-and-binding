<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'payment_id' => uniqid(),
            'amount' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'user_id' => User::factory()->create(),
        ];
    }
}
