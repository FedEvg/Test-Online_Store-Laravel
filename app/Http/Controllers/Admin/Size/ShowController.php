<?php

namespace App\Http\Controllers\Admin\Size;

use App\Http\Controllers\Controller;
use App\Models\Size;

class ShowController extends Controller
{
    public function __invoke(Size $size)
    {
        return view('admin.size.show', compact('size'));
    }
}
