<?php

namespace App\Http\Controllers\Client\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('client.main.index');
    }
}
