<?php

namespace App\Getways;

use App\Interfaces\PaymentGetwayInterface;

class Stripe implements PaymentGetwayInterface
{
    public function pay(int $amount): array
    {
        return [
            'id' => uniqid(),
            'amount' => $amount,
            'created_at' => now(),
        ];
    }
}
