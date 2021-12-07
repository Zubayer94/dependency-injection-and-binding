<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Payment\PaymentService;

class IndexController extends Controller
{
    public function __invoke()
    {
        dd((new PaymentService)->handlePayment(User::first(), 100));
    }
}
