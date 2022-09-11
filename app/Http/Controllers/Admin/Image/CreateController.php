<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.image.create');
    }
}
