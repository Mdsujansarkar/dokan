<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerLogin;
use Session;

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
    public function index()
    {
        $customerId = CustomerLogin::find(Session::get('customrId'));
        return view('fontend.shopping.shopping',['customerId' => $customerId]);
    }
    public function customerSignUp(Request $request)
    {
        $customer_logins                    = new CustomerLogin();
        $customer_logins->first_name        =   $request->first_name;
        $customer_logins->last_name         =   $request->last_name;
        $customer_logins->phone_number      =   $request->phone_number;
        $customer_logins->email_address     =   $request->email_address;
        $customer_logins->password          =   bcrypt($request->password);
        $customer_logins->message           =   $request->message;
        $customer_logins->save();
        $customrId        = $customer_logins->id;
        Session::put('customrId', $customrId);
        Session::put('customerName', $customer_logins->first_name . ' ' . $customer_logins->last_name);
        // $data = $customer ->toArray();
        //    Mail::send('frontend.mail.mail-body', $data, function ($message) use ($data)
        //    {
        //        $message ->to($data['email_address']);
        //        $message ->subject('conform mail');
        //    });
        return redirect('/customer/checkout');
    }
    public function customLogin(Request $request)
    {
        $CustomerLogin = CustomerLogin::where('email_address', $request->email_address)->first();
        if(password_verify($request->password, $CustomerLogin->password))
        {
            Session::put('customrId', $CustomerLogin->id);

            Session::put('customerName',$CustomerLogin->first_name. ' '.$CustomerLogin->last_name);

            return redirect('/customer/checkout');
        }else{
            return redirect('/customer/login')->with('message',"password or email address are not metch");
        }
    }
}
