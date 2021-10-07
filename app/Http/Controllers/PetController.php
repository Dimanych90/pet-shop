<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PetController extends Controller
{
    public function about()
    {
        $sessionId = Session::getId();

        \Cart::session($sessionId);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        return view('pet-shop/about-us', [
            'cart' => $cart,
            'sum' => $sum,
        ]);
    }

}
