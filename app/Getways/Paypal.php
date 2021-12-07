<?php

namespace App\Getways;

use App\Interfaces\PaymentGetwayInterface;

class Paypal implements PaymentGetwayInterface
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
