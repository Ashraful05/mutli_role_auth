<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerContoller extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard');
    }
}
