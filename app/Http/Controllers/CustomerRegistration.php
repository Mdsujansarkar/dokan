<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerRegistration extends Controller
{
    public function registrationCustomer()
    {
        return view('fontend.shopping.registration');
    }
    public function loginCustomer()
    {
        return view('fontend.shopping.login');
    }
}
