<?php

namespace App\Http\Controllers\Admin\Size;

use App\Http\Controllers\Controller;
use App\Models\Size;

class IndexController extends Controller
{
    public function __invoke()
    {
        $sizes = Size::all();

        return view('admin.size.index', compact('sizes'));
    }
}
