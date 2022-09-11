<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Models\Image;

class ShowController extends Controller
{
    public function __invoke(Image $image)
    {
        return view('admin.image.show', compact('image'));
    }
}
