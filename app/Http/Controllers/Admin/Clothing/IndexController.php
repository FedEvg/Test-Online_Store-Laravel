<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Http\Controllers\Controller;
use App\Models\Clothing;

class IndexController extends Controller
{
    public function __invoke()
    {
        $clothes = Clothing::all();

        return view('admin.clothing.index', compact('clothes'));
    }
}
