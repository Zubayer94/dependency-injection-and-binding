<?php

namespace App\Payment;

use App\Getways\Paypal;
use App\Getways\Stripe;
use App\Models\Payment;

class PaymentService
{
    public function handlePayment($user, $amount)
    {
        $payment = (new Paypal)->pay($amount);

        return Payment::create([
            'payment_id' => $payment['id'],
            'amount' => $payment['amount'],
            'user_id' => $user->id,
        ]);
    }
}



