<?php

namespace App\Http\Controllers\Client\Clothing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke()
    {
        return view('client.clothing.show');
    }
}
