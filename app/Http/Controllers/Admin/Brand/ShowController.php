<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;

class ShowController extends Controller
{
    public function __invoke(Brand $brand)
    {
        return view('admin.brand.show', compact('brand'));
    }
}
