<?php

namespace App\Getways;

use App\Interfaces\PaymentGetwayInterface;

class Stripe implements PaymentGetwayInterface
{
    public function pay(int $amount): array
    {
        return [
            'id' => \Str::random(40),
            'amount' => $amount,
            'created_at' => now(),
        ];
    }
}
