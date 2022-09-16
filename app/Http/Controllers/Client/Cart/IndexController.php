<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('client.cart.index');
    }
}
