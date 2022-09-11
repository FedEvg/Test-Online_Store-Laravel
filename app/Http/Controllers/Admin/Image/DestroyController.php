<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Models\Image;

class DestroyController extends Controller
{
    public function __invoke(Image $image)
    {
        $image->delete();

        return redirect()->route('admin.image.index');
    }
}
