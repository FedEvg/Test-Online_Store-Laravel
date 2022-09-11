<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Models\Image;

class EditController extends Controller
{
    public function __invoke(Image $image)
    {
        return view('admin.image.edit', compact('image'));
    }
}
