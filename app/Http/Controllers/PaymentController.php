<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $amount = Store::where('users_id', '=', auth()->user()->id)->select('quantity')->get();
        return view('payment', [
            'amount' => $amount
        ]);
    }
}
