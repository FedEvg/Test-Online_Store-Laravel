<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke()
    {
        return view('user.main.index');
    }
}
