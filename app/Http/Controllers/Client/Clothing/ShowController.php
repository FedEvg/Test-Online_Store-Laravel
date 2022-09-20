<?php

namespace App\Http\Controllers\Client\Clothing;

use App\Http\Controllers\Controller;
use App\Models\Clothing;

class ShowController extends Controller
{
    public function __invoke(Clothing $clothing)
    {
        return view('client.clothing.show', compact('clothing'));
    }
}
