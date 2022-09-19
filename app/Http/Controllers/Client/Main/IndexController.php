<?php

namespace App\Http\Controllers\Client\Main;

use App\Http\Controllers\Controller;
use App\Models\Clothing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $clothes = Clothing::all();
        return view('client.main.index', compact('clothes'));
    }
}
