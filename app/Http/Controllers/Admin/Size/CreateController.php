<?php

namespace App\Http\Controllers\Admin\Size;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.size.create');
    }
}
