<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;
use App\Models\Clothing;

class DestroyController extends Controller
{
    public function __invoke(Clothing $clothing)
    {
        auth()->user()->cart()->detach($clothing->id);

        return redirect()->route('client.cart.index');
    }
}
