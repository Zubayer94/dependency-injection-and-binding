<?php

namespace App\Http\Controllers;

use App\Getways\Paypal;
use App\Getways\Stripe;
use App\Models\User;
use Illuminate\Http\Request;
use App\Payment\PaymentService;

class IndexController extends Controller
{
    public function __invoke()
    {
        // $gateway = resolve(Paypal::class);
        dd((new PaymentService(new Paypal))->handlePayment(User::first(), 100));
    }
}
