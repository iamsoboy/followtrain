<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @param Request $request
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        //$user = Auth::user();
        //dd($request->all());
        $amount = (str_replace(',', '', Cart::instance('default')->total()) * 100);

        /*$array = [ 'custom_fields' => [
            ['display_name' => "Zip Code", "variable_name" => "postalcode", "value" => "$request->zipcode"],
            ['display_name' => "Address", "variable_name" => "address", "value" => "$request->address"],
            ['display_name' => "State", "variable_name" => "state", "value" => "$request->state"],
            ['display_name' => "Country", "variable_name" => "country", "value" => "$request->country"],
        ]

        ];*/

        $request->request->add([
            'first_name' => $request->name,
            'email' => $request->email,
            'amount' => $amount,
            'quantity' => 1,
        ]);

        //dd($request->all(), Cart::content());
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        //$user = Auth::user();

        $paymentDetails = Paystack::getPaymentData();

        if($paymentDetails['data']['status']== "success"){

            dd($paymentDetails);
            /*$details = (object)array
            (
                'from' => $request->from,
                'to' => $request->to,
                'departure_date' => $request->departure_date,
                'passenger' => $request->passenger,
                'ticket_class' => $request->ticket_class,
            );*/

            return redirect()->route('finish', [$paymentDetails])->with('success_message', 'Your Deposit request is successfully');
        }

        dd($paymentDetails);
    }


}
