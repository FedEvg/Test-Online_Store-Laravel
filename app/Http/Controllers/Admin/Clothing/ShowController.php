<?php

namespace App\Http\Controllers\Admin\Clothing;

use App\Http\Controllers\Controller;
use App\Models\Clothing;

class ShowController extends Controller
{
    public function __invoke(Clothing $clothing)
    {
        return view('admin.clothing.show', compact('clothing'));
    }
}
