<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $clothes = auth()->user()->cart;
        return view('client.cart.index', compact('clothes'));
    }
}
