<?php

namespace App\Payment;

use App\Getways\Paypal;
use App\Getways\Stripe;
use App\Models\Payment;

class PaymentService
{
    protected $gateway;

    public function __construct($gateway)
    {
        $this->gateway = $gateway;
    }
    
    public function handlePayment($user, $amount)
    {
        $payment = $this->gateway->pay($amount);

        return Payment::create([
            'payment_id' => $payment['id'],
            'amount' => $payment['amount'],
            'user_id' => $user->id,
        ]);
    }
}



