<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Models\Image;

class IndexController extends Controller
{
    public function __invoke()
    {
        $images = Image::all();

        return view('admin.image.index', compact('images'));
    }
}
