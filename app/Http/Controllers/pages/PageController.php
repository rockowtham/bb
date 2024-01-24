<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function aboutUs()
    {
        return view('web.about_us');
    }

    public function termsAndConditions()
    {
        return view('web.terms-and-conditions');
    }

    public function privacyPolicy()
    {
        return view('web.privacy-policy');
    }

    
    public function paymentPolicy()
    {
        return view('web.payment-policy');
    }
    
    public function shippingPolicy()
    {
        return view('web.shipping-policy');
    }
    public function refundPolicy()
    {
        return view('web.refund-policy');
    }
    public function returnPolicy()
    {
        return view('web.return-policy');
    }
}
