<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentHistoryController extends Controller
{
    public function end_customer_payment()
    {
        return view('admin.payment.end_customer_payment');
    }

    public function business_clients_payment()
    {
        return view('admin.payment.business_client_payment');
    }
}
