<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function makePayment(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'invoice' => 'required',
            'amount' => 'required',
        ]);

        $payment = new payment();
        $payment->name     = $request->name;
        $payment->email    = $request->email;
        $payment->phone    = $request->phone;
        $payment->invoice    = $request->invoice;
        $payment->amount    = $request->amount;

        $payment->save();
        return back();
    }
}
