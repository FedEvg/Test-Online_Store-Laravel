<?php

namespace App\Http\Controllers\Client\Account;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('client.account.index');
    }
}
