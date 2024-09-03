<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSTransactionController extends Controller
{
    public function transaction() {
        return view('POS.transaction');
    }
}
