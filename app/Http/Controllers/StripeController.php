<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\StripeInterface;
use App\Http\Interfaces\ProductInterface;
use App\Http\Requests\ProductRequest;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Traits\ApiDesignTrait;



use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Stripe\Plan;
use Stripe\Stripe;

//use App\Http\Interfaces\PostInterface;
//use App\Http\Interfaces\PostInterface;



class StripeController extends Controller
{


    private $stripeInterface;

    public function __construct(StripeInterface $stripeInterface)
    {
        $this->stripeInterface = $stripeInterface;
//        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        \Stripe\Stripe::setApiKey('sk_test_51OFaRyHdgaZ3SQ3maoDbqJqJg7QaKiI4eZC95OqJTLCRXpYyvbkydcXlGqH8zAKN8bjvKPW8CWoJ7UL7Rzlez8xZ00cLt2DRCi');
    }


    public function getPlans() {
        dd(Plan::all());
    }



    public function authentication(){
        //dd($request);
        return $this->stripeInterface->authentication();
    }

    public function generateIframeModel(Request $request){
//        dd('zz');
//        dd($request);
        return $this->stripeInterface->generateIframeModel($request);
    }
//    public function generateIframeModel($id){
//        //dd($request);
//        return $this->stripeInterface->generateIframeModel($id);
//    }



    public function successCheckout(Request $request){

        return $this->stripeInterface->successCheckout($request);
    }


    public function invoicePaymentSucceeded(Request $request){

        return $this->stripeInterface->invoicePaymentSucceeded($request);
    }


    public function invoicePaymentFailed(Request $request){

        return $this->stripeInterface->invoicePaymentFailed($request);
    }


    public function thankspage(){

        return $this->stripeInterface->thankspage();
    }


}
