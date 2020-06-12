<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shopping;
use Session;
class ShoppingController extends Controller
{
    public function index()
    {
    	return view('fontend.shopping.payment');
    }
    public function saveCustomerInfo(Request $request)
    {
    	$shopping  = new Shopping();
        $shopping  ->first_name     	= $request-> first_name;
        $shopping  ->last_name      	= $request-> last_name;
        $shopping  ->phone_number  		= $request-> phone_number;
        $shopping  ->email_address   	= $request-> email_address;
        $shopping  ->message        	= $request-> message;
        $shopping  ->save();

        Session::put('shippingId', $shopping->id);
        return redirect('/billing/adress/save');
    }
    public function paymentConfarm(Request $request)
    {
    	$paymentType = $request ->payment_type;
    	if($paymentType=='cash')
    	{
    		$order  = new Order();
            $order->customer_id = Session::get('customrId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Session::get('orderTotal');
            $order->save();
    	}
    }
}
